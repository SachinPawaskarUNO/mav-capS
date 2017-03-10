<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{

    public function create()
    {
        return view('businessowner.applyLoan');
    }

    public function store(Request $request)
    {
        $loanapplication = new LoanApplication();
        $loanapplication->loan_title = ucfirst($request->input('loan_title'));
        $loanapplication->loan_amount = ucfirst($request->input('loan_amount'));
        $loanapplication->loan_duration = $request->input('loan_duration');
        $loanapplication->loan_purpose = $request->input('loan_purpose');
    }
}
