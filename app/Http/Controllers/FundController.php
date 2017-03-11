<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\Fund;
use Illuminate\Support\Facades\Redirect;

class FundController extends Controller
{
    //
    public function create()
    {
        return view('investor.fund');
    }

    public function store(Request $request)
    {
        $uid =mt_rand(1000000000,9999999999);
        $fund = new Fund();
        $user = Auth::user();
        $fund->fund_amount = $request->input('fund_amount');
        $fund->fund_uid = $uid;
        $fund->user_id = $user->id;
        $fund->created_by = $user;
        $fund->updated_by = $user;
        $fund->save();
        return Redirect::back()->with('uid', $uid);
    }
}