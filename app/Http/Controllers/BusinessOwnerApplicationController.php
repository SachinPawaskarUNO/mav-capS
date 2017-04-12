<?php

namespace App\Http\Controllers;

use App\BusinessOwnerApplication;
use App\Loan;
use App\LoanAmortization;
use App\LoanPayment;
use App\Mail\ApplicationNotification;
use App\Mail\LoanPaymentNotification;
use App\Mail\ReviewAppNotification;
use App\User;
use Illuminate\Http\Request;
use Auth;
use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Role;

class BusinessOwnerApplicationController extends Controller
{
    public function create()
    {
        return view('businessowner.application');
    }
    public function store(Request $request)
    {
        $user = Auth::user();
        $businessownerapplication = new BusinessOwnerApplication();
        $businessownerapplication->user_id = $user->id;
        $businessownerapplication->bo_first_name=ucfirst($request->input('bo_first_name'));
        $businessownerapplication->bo_last_name=ucfirst($request->input('bo_last_name'));
        $businessownerapplication->bo_identification_card_number=$request->input('bo_identification_card_number');
        $businessownerapplication->bo_date_of_birth=$request->input('bo_date_of_birth');
        $businessownerapplication->bo_gender=$request->input('bo_gender');
        $businessownerapplication->bo_personal_street=$request->input('bo_personal_street');
        $businessownerapplication->bo_personal_city=$request->input('bo_personal_city');
        $businessownerapplication->bo_personal_state=$request->input('bo_personal_state');
        $businessownerapplication->bo_personal_zipcode=$request->input('bo_personal_zipcode');
        $businessownerapplication->bo_personal_country=$request->input('bo_personal_country');
        $businessownerapplication->bo_personal_phonenumber=$request->input('bo_personal_phonenumber');
        $businessownerapplication->bo_business_street=$request->input('bo_business_street');
        $businessownerapplication->bo_business_city=$request->input('bo_business_city');
        $businessownerapplication->bo_business_state=$request->input('bo_business_state');
        $businessownerapplication->bo_business_zipcode=$request->input('bo_business_zipcode');
        $businessownerapplication->bo_business_country=$request->input('bo_business_country');
        $businessownerapplication->bo_business_phonenumber=$request->input('bo_business_phonenumber');
        $businessownerapplication->bo_industry=$request->input('bo_industry');
        $businessownerapplication->bo_business_name=$request->input('bo_business_name');
        $businessownerapplication->bo_legal_entity=$request->input('bo_legal_entity');
        $businessownerapplication->bo_registration_number=$request->input('bo_registration_number');
        $businessownerapplication->bo_registration_year=$request->input('bo_registration_year');
        $businessownerapplication->bo_court_judgement=$request->input('bo_court_judgement');
        $businessownerapplication->bo_court_judgement_yes=$request->input('bo_court_judgement_yes');
        $businessownerapplication->bo_bank_name=$request->input('bo_bank_name');
        $businessownerapplication->bo_bank_account=$request->input('bo_bank_account');
        $businessownerapplication->save();
        if($request->hasFile('bo_upload_IC')) {
            $file = new File();
            $file->user_id=$user->id;
            $file->original_filename = $request->file('bo_upload_IC')->getClientOriginalName();
            $file->file_path = Storage::putFile('bo_applications', $request->file('bo_upload_IC') );
            $file->file_type='bo_upload_IC';
            $file->save();
        } if($request->hasFile('bo_business_license')) {
            $file = new File();
            $file->user_id = $user->id;
            $file->original_filename = $request->file('bo_business_license')->getClientOriginalName();
            $file->file_path = Storage::putFile('bo_applications', $request->file('bo_business_license'));
            $file->file_type = 'bo_business_license';
            $file->save();
        } if($request->hasFile('bo_entity_type')) {
            $file = new File();
            $file->user_id = $user->id;
            $file->original_filename = $request->file('bo_entity_type')->getClientOriginalName();
            $file->file_path = Storage::putFile('bo_applications', $request->file('bo_entity_type'));
            $file->file_type = 'bo_entity_type';
            $file->save();
        } if($request->hasFile('bo_CTOS')) {
            $file = new File();
            $file->user_id = $user->id;
            $file->original_filename = $request->file('bo_CTOS')->getClientOriginalName();
            $file->file_path = Storage::putFile('bo_applications', $request->file('bo_CTOS'));
            $file->file_type = 'bo_CTOS';
            $file->save();
        } if($request->hasFile('bo_audited_statements')) {
            $file = new File();
            $file->user_id = $user->id;
            $file->original_filename = $request->file('bo_audited_statements')->getClientOriginalName();
            $file->file_path = Storage::putFile('bo_applications', $request->file('bo_audited_statements'));
            $file->file_type = 'bo_audited_statements';
            $file->save();
        } if($request->hasFile('bo_operating_statements')) {
            $file = new File();
            $file->user_id = $user->id;
            $file->original_filename = $request->file('bo_operating_statements')->getClientOriginalName();
            $file->file_path = Storage::putFile('bo_applications', $request->file('bo_operating_statements'));
            $file->file_type = 'bo_operating_statements';
            $file->save();
        } if($request->hasFile('bo_tax_returns')) {
            $file = new File();
            $file->user_id = $user->id;
            $file->original_filename = $request->file('bo_tax_returns')->getClientOriginalName();
            $file->file_path = Storage::putFile('bo_applications', $request->file('bo_tax_returns'));
            $file->file_type = 'bo_tax_returns';
            $file->save();
        }
        Mail::to($user)->send(new ApplicationNotification($user));
        $request->session()->flash('status','Your application has been successfully submitted');
        return view('businessowner.index');
    }

    public function update($id)
    {
        BusinessOwnerApplication::where('id',$id)->update(array('bo_app_status' =>'Approved'));
        $borrower = BusinessOwnerApplication::where('id',$id)->first();
        $user = User::where('id',$borrower->user_id)->first();
        $role = Role::where('name','businessowner')->first();
        $user->attachRole($role);
        $message = "Business Owner Application has been approved for " .$user->first_name. " ".$user->last_name. ".";
        Mail::to($user)->send(new ReviewAppNotification($message));
        $managers = User::where('role_request', 'manager')->get()->toArray();
        if ($managers) {
            Mail::to($managers)->send(new ReviewAppNotification($message));
        }
        return Redirect::back()->with('status','The application has been approved successfully');
    }

    public function show($id)
    {
        $boapp = BusinessOwnerApplication::findOrFail($id);
        return view('businessowner.show',compact('boapp'));
    }

    public function reject(Request $request){
        $id = $request->input('bo_app_id');
        BusinessOwnerApplication::where('id',$id)->update(array('bo_app_status' =>'Rejected'));
        $borrower = BusinessOwnerApplication::where('id',$id)->first();
        $user = User::where('id',$borrower->user_id)->first();
        $message = "Business Owner Application has been rejected for " .$user->first_name. " ".$user->last_name. ".";
        Mail::to($user)->send(new ReviewAppNotification($message));
        $managers = User::where('role_request', 'manager')->get()->toArray();
        if ($managers) {
            Mail::to($managers)->send(new ReviewAppNotification($message));
        }
        return Redirect::back()->with('status','The application has been rejected successfully');
    }

    public function loanpayment() {
        $user = Auth::user();
        $borrower = BusinessOwnerApplication::where('user_id',$user->id)->first();
        $loans = Loan::where('business_owner_application_id',$borrower->id)->get();
        foreach ($loans as $loan) {
            $amortization = LoanAmortization::where('loan_id',$loan->id)->first();
        }
        return view('businessowner.loanpayment', compact('loans','amortization'));
    }

    public function paynow($id) {
        $amortization = LoanAmortization::where('id',$id)->first();
        return view('businessowner.paynow', compact('amortization'));
    }

    public function payment(Request $request) {
        $this->validate($request, [
            'extra_monthly_amount' => 'numeric|nullable',
        ]);
        $user = Auth::user();
        $id = $request->input('paid_amortization_id');
        $amount = $request->input('extra_monthly_amount');
        $uid =mt_rand(1000000000,9999999999);
        LoanAmortization::where('id',$id)->update(array('paid_status' =>'Borrower Paid'));
        $amortization = LoanAmortization::where('id',$id)->first();
        $loan = Loan::where('id',$amortization->loan_id)->first();
        $loanpayment = new LoanPayment();
        if($amount) {
            $loanpayment->loan_amount_paid = $amount;
        } else {
            $loanpayment->loan_amount_paid = $amortization->monthly_payment;
        }
        $loanpayment->loan_id = $loan->id;
        $loanpayment->loan_paid_uid = $uid;
        $loanpayment->created_by = ucfirst($user->first_name);
        $loanpayment->updated_by = ucfirst($user->first_name);
        $loanpayment->save();
        $loanpayment = LoanPayment::where('loan_id',$loan->id)->first();
        $message = "Loan Payment has been submitted by " .$user->first_name. " ".$user->_last_name. " for the amount of MYR" .$loanpayment->loan_amount_paid. ".";
        Mail::to($user)->send(new LoanPaymentNotification($message, $loan));
        $managers = User::where('role_request', 'manager')->get()->toArray();
        if ($managers) {
            Mail::to($managers)->send(new LoanPaymentNotification($message, $loan));
        }
        return Redirect::back()->with('uid', $uid)->with('status', 'Your payment has been processed successfully');
    }

    public function fullpayment(Request $request) {
        $user = Auth::user();
        $id = $request->input('full_amortization_id');
        $amortization = LoanAmortization::where('id',$id)->first();
        $loan = Loan::where('id',$amortization->loan_id)->first();
        $message = "Full Loan Payment has been requested by " .$user->first_name. " ".$user->_last_name. ".";
        Mail::to($user)->send(new LoanPaymentNotification($message, $loan));
        $managers = User::where('role_request', 'manager')->get()->toArray();
        if ($managers) {
            Mail::to($managers)->send(new LoanPaymentNotification($message, $loan));
        }
        $request->session()->flash('status','Your request has been processed successfully for full loan payment');
        return view('businessowner.index');
    }
}
