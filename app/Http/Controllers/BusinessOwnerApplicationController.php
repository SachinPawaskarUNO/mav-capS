<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessOwnerApplicationController extends Controller
{
    public function create()
    {
        return view('businessowner.application');
    }
    public function store(Request $request)
    {


    }

}
