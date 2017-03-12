<?php

namespace App\Http\Controllers\Auth;

use App\Mail\EmailVerification;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|regex:/^[a-zA-Z ]+$/',
            'middle_name' => 'nullable|regex:/^[a-zA-Z ]+$/',
            'last_name' => 'required|regex:/^[a-zA-Z ]+$/',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => ucfirst($data['first_name']),
            'middle_name' => ucfirst($data['middle_name']),
            'last_name' => ucfirst($data['last_name']),
            'role_request' => $data['role_request'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_token' => str_random(30),
        ]);
    }

    // Override register function from RegisterUsersTrait
    public function register(Request $request)
    {
        // Laravel validation
        $this->validator($request->all())->validate();
        //Create user
        $user = $this->create($request->all());
        // After creating the user send an email with the random token generated in the create method above
        Mail::to($user)->send(new EmailVerification($user));
        return Redirect::back()->with('status', 'Thank you for registering with us! Please check your email to complete the verification process.');
    }

    public function verify($token)
    {
        $current = Carbon::now();
        $past = User::where('email_token',$token)->value('created_at');
        $diff = $current->diffInHours($past);
        if($diff <= 72){
            User::where('email_token',$token)->firstOrFail()->verified();
            return redirect('login')->with('status', 'Congratulations! You have successfully verified your account.');
        } else {
            User::where('email_token',$token)->delete();
            return redirect('login')->with('warning', 'Sorry the verification token expired within 72 hours of the initial verification email. Please register again to receive new verification email.');
        }

    }
}
