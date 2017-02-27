<?php

namespace App\Http\Controllers;

use App\InvestorApplication;
use Illuminate\Http\Request;

class InvestorApplicationController extends Controller
{
    public function create()
    {
        return view('investor.application');
    }
    public function store(Request $request)
    {

        $investorapplication = new InvestorApplication($request->all());
        $investorapplication->save();
        return view('investor.index');
    }

}
