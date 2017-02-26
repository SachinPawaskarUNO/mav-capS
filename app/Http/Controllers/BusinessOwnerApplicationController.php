<?php

namespace App\Http\Controllers;

use App\BusinessOwnerApplication;
use Illuminate\Http\Request;
use Auth;

class BusinessOwnerApplicationController extends Controller
{
    public function create()
    {
        if (Auth::check()) {
        return view('businessowner.application');
        } else return redirect('/');
    }
    public function store(Request $request)
    {
        $businessownerapplication = new BusinessOwnerApplication($request->all());
        $businessownerapplication->save();
        return view('businessowner.index');

    }

}
