<?php

namespace App\Http\Controllers;
use App\BusinessOwnerApplication;
use App\FundTotal;
use App\Investment;
use App\InvestorApplication;
use App\Loan;
use App\LoanAmortization;
use App\LoanPayment;
use App\Mail\FundsNotification;
use App\Mail\FundsCancelNotification;
use App\Mail\FundsReviewNotification;
use App\Repayment;
use Auth;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Fund;
use Illuminate\Support\Facades\Redirect;

class FundController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        $inv = InvestorApplication::where('inv_first_name',$user->first_name)->first();
        $fund_total = FundTotal::where('inv_app_id',$inv->id)->first();
        $fund = Fund::where('fund_total_id',$fund_total->id)->where('fund_status', null)->first();
            if($fund){
                $uid = $fund->fund_uid;
                session(['uid' => $uid, 'fund_amount' => $fund->fund_amount]);
                return view('investor.fund', compact('inv'));
            } else {
                return view('investor.fund', compact('inv'));
            }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fund_amount' => 'numeric|required|min:1',
        ]);
        $uid =mt_rand(1000000000,9999999999);
        $fund = new Fund();
        $user = Auth::user();
        $invapp = InvestorApplication::where('user_id',$user->id)->first();
        $fund_total = FundTotal::where('inv_app_id',$invapp->id)->first();
        $fund->fund_amount = $request->input('fund_amount');
        $fund->fund_uid = $uid;
        $fund->fund_total_id = $fund_total->id;
        $fund->created_by = $user->first_name;
        $fund->updated_by = $user->first_name;
        $fund->save();
        Mail::to($user)->send(new FundsNotification($user, $fund));
        $managers = User::where('role_request','manager')->get()->toArray();
        if($managers){
            Mail::to($managers)->send(new FundsNotification($user, $fund));
       }
        return Redirect::back()->with('uid', $uid)->with('fund_amount', $fund->fund_amount);
    }

    public function destroy($id)
    {
        $fundTotal = FundTotal::where('inv_app_id', $id)->first();
        $fund = Fund::where('fund_total_id', $fundTotal->id)->first();
        $user = Auth::user();
        Mail::to($user)->send(new FundsCancelNotification($user, $fund));
        $managers = User::where('role_request', 'manager')->get()->toArray();
        if ($managers) {
          Mail::to($managers)->send(new FundsCancelNotification($user, $fund));
        }
       Fund::find($fund->id)->delete();
       return redirect('home')->with('status','Your investment has been successfully cancelled');
    }

    public function approvefunds(Request $request)
    {
        $this->validate($request, [
            'fund_verified_amount' => 'numeric|nullable',
        ]);
       $user = Auth::user();
       $id = $request->input('add_funds_id');
       $amount = $request->input('fund_verified_amount');
       $fund = Fund::where('id',$id)->first();
       if($amount) {
           Fund::where('id',$id)->update(array('fund_status' =>'Manager Approved','fund_verified_amount' =>$amount, 'updated_by' => $user->first_name));
       } else {
           Fund::where('id',$id)->update(array('fund_status' =>'Manager Approved','fund_verified_amount' =>$fund->fund_amount, 'updated_by' => $user->first_name));
       }
       $fund = Fund::where('id',$id)->first();
       $fundtotal = FundTotal::where('id',$fund->fund_total_id)->first();
       FundTotal::where('id',$fundtotal->id)->update(array('funds_total' => $fundtotal->funds_total + $fund->fund_verified_amount, 'updated_by' => $user->first_name));
       $inv = InvestorApplication::where('id',$fundtotal->inv_app_id)->first();
       $message = "Added funds have been approved for " .$inv->inv_first_name. " ".$inv->inv_last_name. ".";
       $user = User::where('id',$inv->user_id)->first();
       Mail::to($user)->send(new FundsReviewNotification($message, $fund));
        $managers = User::where('role_request', 'manager')->get()->toArray();
        if ($managers) {
            Mail::to($managers)->send(new FundsReviewNotification($message, $fund));
        }
       return Redirect::back()->with('status','Fund has been approved successfully');
    }

    public function rejectfunds(Request $request)
    {
        $user = Auth::user();
        $id = $request->input('add_funds_reject_manager');
        Fund::where('id',$id)->update(array('fund_status' =>'Manager Rejected', 'updated_by' => $user->first_name));
        $fund = Fund::where('id',$id)->first();
        $fundtotal = FundTotal::where('id',$fund->fund_total_id)->first();
        $inv = InvestorApplication::where('id',$fundtotal->inv_app_id)->first();
        $message = "Added funds have been rejected for " .$inv->inv_first_name. " ".$inv->inv_last_name. ".";
        $user = User::where('id',$inv->user_id)->first();
        Mail::to($user)->send(new FundsReviewNotification($message, $fund));
        $managers = User::where('role_request', 'manager')->get()->toArray();
        if ($managers) {
            Mail::to($managers)->send(new FundsReviewNotification($message, $fund));
        }
        return Redirect::back()->with('status','Fund has been rejected successfully');
    }

    public function approveloanpayment(Request $request)
    {
        $this->validate($request, [
            'loanpayment_verified_amount' => 'numeric|nullable',
        ]);
        $user = Auth::user();
        $id = $request->input('loanpayment_id');
        $amount = $request->input('loanpayment_verified_amount');
        $loanpayment = LoanPayment::where('id',$id)->first();
        if($amount) {
            LoanPayment::where('id',$id)->update(array('loan_payment_status' =>'Manager Approved','loan_amount_verified' =>$amount, 'updated_by' => $user->first_name));
            $amortization = LoanAmortization::where('loan_id',$loanpayment->loan_id)->where('paid_status', null)->first();
            $loan = Loan::where('id',$amortization->loan_id)->first();
            $remainingamount = $loan->loan_amount - $amount;
            $month =$amortization->month;
            $loan_interest= ($loan->loan_interest_rate)/100;
            $loan_months = preg_replace("/[^0-9]/","",$loan->loan_duration- ($month -1));
            $monthly_rate=$loan_interest/12;
            $powerpart= pow((1+$monthly_rate),$loan_months);
            $monthly_payment= $remainingamount*(($monthly_rate * $powerpart)/($powerpart -1));
            LoanAmortization::where('loan_id',$loanpayment->loan_id)->where('paid_status', null)->delete();
            for ($current_month = $month; $current_month <= $loan_months; $current_month++)
            {
                $interestformonth = $remainingamount * $monthly_rate;
                $principalformonth = $monthly_payment - $interestformonth;
                $loan_principal = $remainingamount - $principalformonth;
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
        } else {
            LoanPayment::where('id',$id)->update(array('loan_payment_status' =>'Manager Approved','loan_amount_verified' =>$loanpayment->loan_amount_paid, 'updated_by' => $user->first_name));
        }
        $loanpayment = LoanPayment::where('id',$id)->first();
        $repayment = Repayment::where('loan_id',$loanpayment->loan_id)->first();
        Repayment::where('id',$repayment->id)->update(array('repayment_amount'=> $repayment->repayment_amount + $loanpayment->loan_amount_verified, 'updated_by' => $user->first_name));
        $amortization = LoanAmortization::where('loan_id',$loanpayment->loan_id)->where('paid_status', null)->first();
        if($amortization){LoanAmortization::where('id',$amortization->id)->update(array('paid_status' => 'Due'));}
        return Redirect::back()->with('status','Loan Payment has been approved successfully');
    }

    public function rejectloanpayment(Request $request)
    {
        $user = Auth::user();
        $id = $request->input('loanpayment_reject_manager');
        LoanPayment::where('id',$id)->update(array('loan_payment_status' =>'Manager Rejected', 'updated_by' => $user->first_name));
        $loanpayment = LoanPayment::where('id',$id)->first();
        $amortization = LoanAmortization::where('loan_id',$loanpayment->loan_id)->where('paid_status', 'Borrower Paid')->first();
        LoanAmortization::where('id',$amortization->id)->update(array('paid_status' => 'Due'));
        return Redirect::back()->with('status','Loan Payment has been rejected successfully');
    }

    public function withdrawfunds() {
        $user = Auth::user();
        $invapp = InvestorApplication::where('user_id',$user->id)->first();
        $investments = Investment::where('investor_application_id',$invapp->id)->get();
        $sum = 0;
        foreach($investments as $num => $values) {
            $sum += $values[ 'invested_amount' ];
        }
        $fundtotal = FundTotal::where('inv_app_id',$invapp->id)->first();
        return view('investor.withdrawfunds', compact('invapp','sum','fundtotal'));
    }

    public function withdrawnow(Request $request) {
        $available = $request->input('available_fund');
        $id = $request->input('withdraw_inv_id');
        $this->validate($request, [
            'withdraw_amount' => "required|numeric|between:0,$available",
        ]);
        $user = Auth::user();
        $amount = $request->input('withdraw_amount');
        $uid =mt_rand(1000000000,9999999999);
        $fundtotal = FundTotal::where('inv_app_id',$id)->first();
        FundTotal::where('inv_app_id',$id)->update(array('funds_total'=>$fundtotal->funds_total - $amount, 'updated_by'=>$user->first_name));
        return Redirect::back()->with('uid', $uid)->with('status', 'Your request has been processed successfully');
    }
}