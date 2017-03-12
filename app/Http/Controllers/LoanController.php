<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use Auth;
use App\Mail\ApplicationNotification;
use Illuminate\Support\Facades\Mail;
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
            'loan_amount' => 'required|numeric|min:0',
            'loan_title' => 'required|Alpha',
            'loan_purpose' => 'required',
            'loan_duration' => 'required',
        ]);
        $loan = new Loan();
        $user = Auth::user();
        $loan->loan_title = $request->input('loan_title');
        $loan->loan_amount = $request->input('loan_amount');
        $loan->loan_duration = $request->input('loan_duration');
        $loan->loan_purpose = $request->input('loan_purpose');
        $loan->created_by = $user->first_name;
        $loan->updated_by = $user->first_name;
        $loan->save();
        Mail::to($user)->send(new ApplicationNotification($user));
        return Redirect::back()->with('status','Your application has been successfully submitted');
//        $request->session()->flash('status','Your application has been successfully submitted');
//        return view('businessowner.applyLoan');
    }


}
