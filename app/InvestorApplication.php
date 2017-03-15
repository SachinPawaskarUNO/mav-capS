<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvestorApplication extends Model
{
    protected $fillable=[
        'inv_first_name',
        'inv_last_name',
        'inv_identification_card_number',
        'inv_date_of_birth',
        'inv_gender',
        'inv_street',
        'inv_city',
        'inv_state',
        'inv_zipcode',
        'inv_country',
        'inv_phonenumber',
        'inv_identity',
        'inv_income',
        'inv_agree_terms',
        'inv_net_worth',
        'inv_estimated_p2p',
        'inv_risk_tolerance',
        'inv_stock_market',
        'inv_bonds_notes',
        'inv_mutual_funds',
        'inv_sme_business',
        'inv_p2p_lending',
    ];

    public function funds() {
        return $this->hasMany('App\Fund');
    }
}
