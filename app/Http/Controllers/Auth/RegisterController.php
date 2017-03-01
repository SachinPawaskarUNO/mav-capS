<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
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
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|Alpha|max:255',
            'last_name' => 'required|Alpha|max:255',
            //'middle_name' => 'max:255|Alpha',
            'role_request' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'role_request' => $data['role_request'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),

        ]);
    }

    protected function register(Request $request)
    {
        $input = $request->all();
        $validator = $this->validator($input);

        if ($validator->passes()) {
            $data = $this->create($input)->toArray();
            $data['token'] = str_random(25);
            $user = User::find($data['id']);
            $user->token = $data['token'];
            $user->save();

            Mail::send('mails.confirmation', $data, function ($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Registration Confirmation');

            });
            return redirect(route('login'))->with('status', 'confirmation email has been sent, please check your email');
        }
        return redirect(route('login'))->with('status', $validator->errors()->toArray());
    }

    public function confirmation($token)
    {

            $user = User::where('token',$token)->first();
        $user->confirmed = 1;
        $user->token = null;
        $user->save();
            return redirect(route('login'))->with('status', 'Your activation is completed.');
//
//        return redirect(route('login'))->with('status', 'Something went wrong.');
    }
}

