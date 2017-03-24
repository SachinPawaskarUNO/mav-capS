<?php

namespace App\Http\Controllers;

use App\BusinessOwnerApplication;
use App\Mail\LoanApproveNotification;
use App\Mail\LoanNotification;
use App\Mail\LoanRejectNotification;
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
        $user = Auth::user();
        $bo = BusinessOwnerApplication::where('bo_first_name',$user->first_name)->first();
        return view('businessowner.applyloan', compact('bo'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'loan_amount' => 'numeric|required|min:1',
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
        $loan->business_owner_application_id = $request->input('bo_id');
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
        InvestorApplication::where('id',$id)->update(array('inv_app_status' =>'Rejected'));
        return Redirect::back()->with('status','The application has been rejected successfully');
    }

    public function myloans()
    {
        $user = Auth::user();
        $boapps = BusinessOwnerApplication::where('bo_first_name',$user->first_name)->first();
        $loans = Loan::where('business_owner_application_id', $boapps->id)->get();
        return view('businessowner.myloans', compact('loans'));
    }

    public function show($id)
    {
        $loanrisk = Loan::findOrFail($id);
        return view('businessowner.loandetail',compact('loanrisk'));
    }
    public function approveboloanmanager(Request $request){
        $id = $request->input('bo_loan_manager_approve_id');
       Loan::where('id',$id)->update(array('loan_status' =>'Manager Approved'));
        return Redirect::back()->with('status','The application has been accepted successfully');
    }
    public function rejectboloanmanager(Request $request){
        $id = $request->input('loan_reject_manager');
        Loan::where('id',$id)->update(array('loan_status' =>'Manager Rejected'));
        return Redirect::back()->with('status','The application has been rejected successfully');
    }



    public function approveboloan(Request $request){
        $user = Auth::user();
        $id = $request->input('bo_loan_id');
        Loan::where('id',$id)->update(array('loan_status' =>'Borrower Approved'));
        $loan = Loan::where('id',$id)->first();
        Mail::to($user)->send(new LoanApproveNotification($user, $loan));
        $managers = User::where('role_request','manager')->get()->toArray();
        if($managers){
            Mail::to($managers)->send(new LoanApproveNotification($user, $loan));
        }
        return Redirect::back()->with('status','Your Loan has been approved successfully');
    }

    public function rejectboloan(Request $request){
        $user = Auth::user();
        $id = $request->input('bo_loan_id');
        Loan::where('id',$id)->update(array('loan_status' =>'Borrower Rejected'));
        $loan = Loan::where('id',$id)->first();
        Mail::to($user)->send(new LoanRejectNotification($user, $loan));
        $managers = User::where('role_request','manager')->get()->toArray();
        if($managers){
            Mail::to($managers)->send(new LoanRejectNotification($user, $loan));
        }
        return Redirect::back()->with('status','Your Loan has been rejected successfully');
    }



}
