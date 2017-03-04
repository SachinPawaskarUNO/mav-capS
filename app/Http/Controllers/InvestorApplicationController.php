<?php

namespace App\Http\Controllers;

use App\InvestorApplication;
use Illuminate\Http\Request;
use Auth;

class InvestorApplicationController extends Controller
{
    public function create()
    {
        if (Auth::check()) {
        return view('investor.application');
        } else return redirect('/');
    }
    public function store(Request $request)
    {

        $investorapplication = new InvestorApplication($request->all());
        $investorapplication->save();
        return view('investor.index');
    }

}
