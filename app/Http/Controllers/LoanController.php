<?php

namespace App\Http\Controllers;

use App\Mail\LoanNotification;
use Illuminate\Http\Request;
use App\Loan;
use Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\InvestorApplication;
use App\User;

class LoanController extends Controller
{

    public function create()
    {
        return view('businessowner.applyloan');
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
        Mail::to($user)->send(new LoanNotification($user, $loan));
        $managers = User::where('role_request','manager')->get()->toArray();
        if($managers){
            Mail::to($managers)->send(new LoanNotification($user, $loan));
        }
        return Redirect::back()->with('status','Your application has been successfully submitted');
    }


    public function update($id)
    {
        InvestorApplication::where('id',$id)->update(array('STATUS' =>'rejected'));

        return Redirect::back()->with('status1',$id);
    }

}
