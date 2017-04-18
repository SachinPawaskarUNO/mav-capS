<?php

namespace App\Http\Controllers;

use App\BusinessOwnerApplication;
use App\Disbursement;
use App\LoanAmortization;
use App\Mail\LoanApproveNotification;
use App\Mail\LoanDisbursement;
use App\Mail\LoanNotification;
use App\Mail\LoanRejectNotification;
use App\Mail\ReviewAppNotification;
use App\Repayment;
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
            'loan_title' => 'required|regex:/^[a-zA-Z ]+$/',
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
        $investor = InvestorApplication::where('id',$id)->first();
        $user = User::where('id',$investor->user_id)->first();
        $message = "Investor Application has been rejected for " .$user->first_name. " ".$user->last_name. ".";
        Mail::to($user)->send(new ReviewAppNotification($message));
        $managers = User::where('role_request', 'manager')->get()->toArray();
        if ($managers) {
            Mail::to($managers)->send(new ReviewAppNotification($message));
        }
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
        $this->validate($request, [
            'loan_interest_rate' => 'required|numeric|between:0,99.99',
        ]);
        $id = $request->input('bo_loan_manager_approve_id');
        Loan::where('id',$id)->update(array('loan_status' =>'Manager Approved','loan_interest_rate' =>$request->input('loan_interest_rate')));
        $loan = Loan::where('id',$id)->first();
        $boapp = BusinessOwnerApplication::where('id',$loan->business_owner_application_id)->first();
        $user = User::where('id', $boapp->user_id)->first();
        Mail::to($user)->send(new LoanApproveNotification($user, $loan));
        return Redirect::back()->with('status','The loan application has been accepted successfully');
    }
    public function rejectboloanmanager(Request $request){
        $id = $request->input('loan_reject_manager');
        Loan::where('id',$id)->update(array('loan_status' =>'Manager Rejected'));
        $loan = Loan::where('id',$id)->first();
        $boapp = BusinessOwnerApplication::where('id',$loan->business_owner_application_id)->first();
        $user = User::where('id', $boapp->user_id)->first();
        Mail::to($user)->send(new LoanRejectNotification($user, $loan));
        $managers = User::where('role_request','manager')->get()->toArray();
        if($managers){
            Mail::to($managers)->send(new LoanRejectNotification($user, $loan));
        }
        return Redirect::back()->with('status','The application has been rejected successfully');
    }

    public function approveboloan(Request $request){
        $user = Auth::user();
        $id = $request->input('bo_loan_id');
        Loan::where('id',$id)->update(array('loan_status' =>'Borrower Approved'));
        $loan = Loan::where('id',$id)->first();
        $managers = User::where('role_request','manager')->get()->toArray();
        if($managers){
            Mail::to($managers)->send(new LoanApproveNotification($user, $loan));
        }
        return Redirect::back()->with('status','Your request has been processed successfully');
    }

    public function acceptboloan(Request $request){
        $user = Auth::user();
        $id = $request->input('bo_loan_id');
        Loan::where('id',$id)->update(array('loan_status' =>'Borrower Accepted'));
        $loan = Loan::where('id',$id)->first();
        Mail::to($user)->send(new LoanApproveNotification($user, $loan));
        $managers = User::where('role_request','manager')->get()->toArray();
        if($managers){
            Mail::to($managers)->send(new LoanApproveNotification($user, $loan));
        }
        return Redirect::back()->with('status','Your request has been processed successfully');
    }

    public function rejectboloan(Request $request){
        $user = Auth::user();
        $id = $request->input('bo_loan_id');
        Loan::where('id',$id)->update(array('loan_status' =>'Borrower Rejected'));
        $loan = Loan::where('id',$id)->first();
        $managers = User::where('role_request','manager')->get()->toArray();
        if($managers){
            Mail::to($managers)->send(new LoanRejectNotification($user, $loan));
        }
        return Redirect::back()->with('status','Your Loan has been rejected successfully');
    }
    public function disburseloan(Request $request){
        $user = Auth::user();
        $id = $request->input('manager_disburse_id');
        Loan::where('id',$id)->update(array('loan_status' =>'Loan Disbursed'));
        $loan = Loan::where('id',$id)->first();
        $loan_principal= $loan->loan_funded_amount;
        $repayment = new Repayment();
        $repayment->loan_id = $loan->id;
        $repayment->created_by = $user->first_name;
        $repayment->updated_by = $user->first_name;
        $repayment->save();
        $uid =mt_rand(1000000000,9999999999);
        $disbursement = new Disbursement();
        $disbursement-> disbursement_uid = $uid;
        $disbursement-> disbursement_amount =  round( $loan_principal,2);
        $disbursement->loan_id= $loan->id;
        $disbursement->created_by = $user->first_name;
        $disbursement->updated_by = $user->first_name;
        $loan_interest= ($loan->loan_interest_rate)/100;
        $loan_months = preg_replace("/[^0-9]/","",$loan->loan_duration);
        $monthly_rate=$loan_interest/12;
        $powerpart= pow((1+$monthly_rate),$loan_months);
        $monthly_payment= $loan_principal*(($monthly_rate * $powerpart)/($powerpart -1));
        for ($current_month = 1; $current_month <= $loan_months; $current_month++)
        {
           $interestformonth = $loan_principal * $monthly_rate;
           $principalformonth = $monthly_payment - $interestformonth;
           $loan_principal = $loan_principal - $principalformonth;
           $loanamortization = new LoanAmortization();
           $loanamortization-> loan_id = $loan->id;
           $loanamortization-> monthly_payment = round($monthly_payment);
           $loanamortization-> total_amount_paid = 0;
           $loanamortization-> amount_remaining = round($loan_principal);
           $loanamortization-> interest_amount = round($interestformonth);
           $loanamortization-> month= $current_month;
           $loanamortization-> created_by = $user->first_name;;
           $loanamortization-> updated_by = $user->first_name;
           $loanamortization->save();
        }
        $disbursement->save();
        Loan::where('id',$id)->update(array('loan_amount' =>$loan->loan_funded_amount));
        $amortization = LoanAmortization::where('loan_id',$id)->first();
        LoanAmortization::where('id',$amortization->id)->update(array('paid_status' => 'Due'));
        $boapp = BusinessOwnerApplication::where('id',$loan->business_owner_application_id)->first();
        $user = User::where('id', $boapp->user_id)->first();
        Mail::to($user)->send(new LoanDisbursement($user, $boapp,$loan, $disbursement));
        $managers = User::where('role_request','manager')->get()->toArray();
        if($managers){
            Mail::to($managers)->send(new LoanDisbursement($user, $boapp, $loan, $disbursement));
        }
        return view('managers.diburseddetail',compact('boapp','disbursement'));
    }
}
