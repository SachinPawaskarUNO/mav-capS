<?php

namespace App\Http\Controllers;

use App\BusinessOwnerApplication;
use Illuminate\Http\Request;

class BusinessOwnerApplicationController extends Controller
{
    public function create()
    {
        return view('businessowner.application');
    }
    public function store(Request $request)
    {
        $businessownerapplication = new BusinessOwnerApplication($request->all());
        $businessownerapplication->save();
        return view('businessowner.index');

    }

}
