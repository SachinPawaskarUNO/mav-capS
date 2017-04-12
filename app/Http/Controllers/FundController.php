<?php

namespace App\Http\Controllers;
use App\BusinessOwnerApplication;
use App\FundTotal;
use App\InvestorApplication;
use App\Mail\FundsNotification;
use App\Mail\FundsCancelNotification;
use App\Mail\FundsReviewNotification;
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
}