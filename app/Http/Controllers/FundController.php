<?php

namespace App\Http\Controllers;
use App\InvestorApplication;
use App\Mail\FundsNotification;
use App\Mail\FundsCancelNotification;
use Auth;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Fund;
use Illuminate\Support\Facades\Redirect;
use App\File;
use Illuminate\Support\Facades\Storage;

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
        $this->validate($request, [
            'fund_amount' => 'numeric|required|min:1',
        ]);
        $uid =mt_rand(1000000000,9999999999);
        $fund = new Fund();
        $user = Auth::user();
        $fund->fund_amount = $request->input('fund_amount');
        $fund->fund_uid = $uid;
        $fund->investor_application_id = $request->input('inv_id');
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
        $fund = Fund::where('investor_application_id', $id)->first();
        Fund::find($fund->id)->delete();
        $user = Auth::user();
        Mail::to($user)->send(new FundsCancelNotification($user, $fund));
        $managers = User::where('role_request', 'manager')->get()->toArray();
        if ($managers) {
            Mail::to($managers)->send(new FundsCancelNotification($user, $fund));
        }
        return redirect('home')->with('status','Your investment has been successfully cancelled');
    }

    //Download function
    public function show($filetype){
        $file = File::where('file_type', $filetype)->first();
        return response()->download(Storage::disk()->getDriver()->getAdapter()->applyPathPrefix($file->file_path));
    }
}