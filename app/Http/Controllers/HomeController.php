<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $users = User::all();
            if ($user->hasRole('admin'))
                return view('admin.index', compact('users'));
             else if ($user->hasRole('investor') || $user->role_request === 'investor')
                 return view('investor.index', compact('user'));
             else if ($user->hasRole('businessowner') || $user->role_request === 'businessowner')
                 return view('businessowner.index',compact('user'));
             else
                 return view ('home', compact('user'));
            }
        }
    public function adminprofile()
    {
        $user = Auth::user();
        return view('admin.adminprofile',compact('user'));
    }
    public function editadminprofile()
    {
        $user = Auth::user();
        return view('admin.editprofile',compact('user'));
    }

    public function  updateadminprofile(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|regex:/^[a-zA-Z ]+$/|max:255',
            'last_name' => 'required|regex:/^[a-zA-Z ]+$/|max:255',
            'middle_name' => 'nullable|regex:/^[a-zA-Z ]+$/|max:255',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->update(array($user->first_name=$request->input('admin_first_name'),
        $user->middle_name=$request->input('admin_middle_name'),
        $user->last_name=$request->input('admin_last_name'),
        $user->password=bcrypt($request->input('new_password'))
        ));
        return Redirect::back()->with('status1','The profile has been updated successfully');
    }
}
