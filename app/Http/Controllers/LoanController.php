<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use Auth;
use Illuminate\Support\Facades\Redirect;

class LoanController extends Controller
{

    public function create()
    {
        return view('businessowner.applyLoan');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'loan_amount' => 'required|numeric',
            'loan_title' => 'required|Alpha',
            'loan_purpose' => 'required',
            'loan_duration' => 'required',
        ]);
        $loan = new Loan();
        $user = Auth::user();
        $loan->loan_title = ucfirst($request->input('loan_title'));
        $loan->loan_amount = ucfirst($request->input('loan_amount'));
        $loan->loan_duration = $request->input('loan_duration');
        $loan->loan_purpose = $request->input('loan_purpose');
        $loan->created_by = $user;
        $loan->updated_by = $user;
        $loan->save();
        return Redirect::back()->with('status','Loan Application has been submitted successfully.');



    }

}
