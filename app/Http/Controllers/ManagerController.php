<?php

namespace App\Http\Controllers;
use App\Fund;
use App\FundTotal;
use App\Investment;
use App\InvestorApplication;
use App\LoanAmortization;
use App\LoanPayment;
use App\Repayment;
use App\User;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Manager;
use App\Role;
use App\BusinessOwnerApplication;
use App\Loan;
use App\File;
use Illuminate\Support\Facades\Storage;

class ManagerController extends Controller
{
    public function index()
    {
        //
        $users=User::all();
        return view('managers.index',compact('users'));
    }


    public function show($id)
    {
        $manager = User::findOrFail($id);
        return view('managers.show',compact('manager'));
    }

    public function create()
    {
        return view('managers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function lrc()
    {
        $loans = Loan::all();
        return view('managers.lrc',compact('loans'));

    }
    public function loandisbursement()
    {
        $loans = Loan::all();
        return view('managers.loandisbursement',compact('loans'));

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|regex:/^[a-zA-Z ]+$/|max:255',
            'last_name' => 'required|regex:/^[a-zA-Z ]+$/|max:255',
            'middle_name' => 'nullable|regex:/^[a-zA-Z ]+$/|max:255',
            //*Alternative*
            //'middle_name' => $request->middle_name != null ?'sometimes|required|Alpha':'',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $manager= new User();
        $manager->first_name=$request->input('first_name');
        $manager->middle_name=$request->input('middle_name');
        $manager->last_name=$request->input('last_name');
        $manager->email=$request->input('email');
        $manager->password=bcrypt($request->input('password'));
        $manager->role_request='manager';
        $manager->verified = 1;
        $manager->save();
        $role = Role::where('name','manager')->first();
        $manager->attachRole($role);
        return redirect('home');
    }


    public function edit($id)
    {
        $manager=User::find($id);
        return view('managers.edit',compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $this->validate($request, [
            'first_name' => 'required|regex:/^[a-zA-Z ]+$/|max:255',
            'middle_name' => 'nullable|regex:/^[a-zA-Z ]+$/|max:255',
            //*Alternative*//
            //'middle_name' => $request->middle_name != null ?'sometimes|required|Alpha':'',
            'last_name' => 'required|regex:/^[a-zA-Z ]+$/|max:255',
            'email' => 'required|email|max:255',
        ]);

        $manager=User::find($id);
        $manager->update($request->all());
        return redirect('home');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->detachRoles($user->roles);
        $user->delete();
        return redirect('home');
    }

    public function reviewboa()
    {
        $boapps = BusinessOwnerApplication::all();
        return view('managers.reviewboapp',compact('boapps'));
    }

    public function reviewia()
    {
        $invapps = InvestorApplication::all();
        return view('managers.reviewinvapp',compact('invapps'));
    }

    //Download function for business owner documents
    public function downloadbo($id, $filetype){
        $boapp = BusinessOwnerApplication::where('id',$id)->first();
        $file = File::where('file_type', $filetype)->where('user_id',$boapp->user_id)->first();
        return response()->download(Storage::disk()->getDriver()->getAdapter()->applyPathPrefix($file->file_path));
    }

    //Download function for investor documents
    public function downloadinv($id, $filetype){
        $invapp = InvestorApplication::where('id',$id)->first();
        $file = File::where('file_type', $filetype)->where('user_id',$invapp->user_id)->first();
        return response()->download(Storage::disk()->getDriver()->getAdapter()->applyPathPrefix($file->file_path));
    }

    public function verifyfunds(){
        $funds = Fund::all();
        $fundtotals = FundTotal::all();
        $investors = InvestorApplication::all();
        return view('managers.verifyfunds', compact('funds','fundtotals','investors'));
    }

    public function verifyloanpayment(){
        $loans = Loan::all();
        $loanpayments = LoanPayment::all();
        $businessowners = BusinessOwnerApplication::all();
        return view('managers.verifyloanpayment', compact('loans','loanpayments','businessowners'));
    }

    public function loanrepayment()
    {
        $loans = Loan::all();
        $amortizations = LoanAmortization::all();
        $repayments = Repayment::all();
        return view('managers.repayment',compact('loans','amortizations','repayments'));

    }

    public function loanrepaymentdetails($id)
    {
        $loan = Loan::where('id',$id)->first();
        $investments = Investment::where('loan_id',$id)->get();
        $repayments = Repayment::where('loan_id',$id)->first();
       print_r($id);
    }
}
