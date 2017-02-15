<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function investorRegistration(){
        $role_request = 'investor';
        return view('auth.registeruser', compact('role_request'));
    }

    public function businessOwnerRegistration() {
        $role_request = 'businessowner';
        return view('auth.registeruser', compact('role_request'));
    }
}
