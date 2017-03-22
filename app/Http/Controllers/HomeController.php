<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Role;

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
    }
