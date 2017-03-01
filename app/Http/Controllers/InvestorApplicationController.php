<?php

namespace App\Http\Controllers;
use Auth;
use App\InvestorApplication;
use Illuminate\Http\Request;


class InvestorApplicationController extends Controller
{
    public function create()
    {
        if (Auth::check()) {
        return view('investor.application');
        } else return redirect('/');
    }
    public function store(Request $request)
    {

        $investorapplication = new InvestorApplication();
        $investorapplication->inv_first_name=$request->input('inv_first_name');
        $investorapplication->inv_last_name=$request->input('inv_last_name');
        $investorapplication->inv_identification_card_number=$request->input('inv_identification_card_number');
        $investorapplication->inv_date_of_birth=$request->input('inv_date_of_birth');
        $investorapplication->inv_gender=$request->input('inv_gender');
        $investorapplication->inv_street=$request->input('inv_street');
        $investorapplication->inv_city=$request->input('inv_city');
        $investorapplication->inv_state=$request->input('inv_state');
        $investorapplication->inv_zipcode=$request->input('inv_zipcode');
        $investorapplication->inv_country=$request->input('inv_country');
        $investorapplication->inv_phonenumber=$request->input('inv_phonenumber');
        $investorapplication->inv_identity=$request->input('inv_identity');
        $investorapplication->inv_income=$request->input('inv_income');
        $investorapplication->inv_agree_terms=$request->input('inv_agree_terms');
        $investorapplication->inv_net_worth=$request->input('inv_net_worth');
        $investorapplication->inv_liquid_asset=$request->input('inv_liquid_asset');
        $investorapplication->inv_estimated_p2p=$request->input('inv_estimated_p2p');
        $investorapplication->inv_risk_tolerance=$request->input('inv_risk_tolerance');
        $investorapplication->inv_stock_market=$request->input('inv_stock_market');
        $investorapplication->inv_bonds_notes=$request->input('inv_bonds_notes');
        $investorapplication->inv_mutual_funds=$request->input('inv_mutual_funds');
        $investorapplication->inv_sme_business=$request->input('inv_sme_business');
        $investorapplication->inv_p2p_lending=$request->input('inv_p2p_lending');
        $investorapplication->save();
        return view('investor.index');
    }
}
