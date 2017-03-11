<?php

namespace App\Http\Controllers;
use App\InvestorApplication;
use Auth;

use Illuminate\Http\Request;
use App\Fund;
use Illuminate\Support\Facades\Redirect;

class FundController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        $inv = InvestorApplication::where('inv_first_name',$user->first_name)->first();
        return view('investor.fund', compact('inv'));
    }

    public function store(Request $request)
    {
        $uid =mt_rand(1000000000,9999999999);
        $fund = new Fund();
        $user = Auth::user();
        $fund->fund_amount = $request->input('fund_amount');
        $fund->fund_uid = $uid;
        $fund->investor_application_id = $request->input('inv_id');
        $fund->created_by = $user->first_name;
        $fund->updated_by = $user->first_name;
        $fund->save();
        return Redirect::back()->with('uid', $uid);
    }
}