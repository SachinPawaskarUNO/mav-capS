<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessOwnerApplication extends Model
{
    protected $fillable=[
        'bo_first_name',
        'bo_last_name',
        'bo_identification_card_number',
        'bo_date_of_birth',
        'bo_gender',
        'bo_personal_street',
        'bo_personal_city',
        'bo_personal_state',
        'bo_personal_zipcode',
        'bo_personal_country',
        'bo_personal_phonenumber',
        'bo_business_street',
        'bo_business_city',
        'bo_business_state',
        'bo_business_zipcode',
        'bo_business_country',
        'bo_business_phonenumber',
        'bo_industry',
        'bo_legal_entity',
        'bo_registration_number',
        'bo_registration_year',
        'bo_court_judgement',
        'bo_bank_name',
        'bo_bank_account',
    ];
    public function customer() {
        return $this->belongsTo('App\User');
    }
    public function loans() {
        return $this->hasMany('App\Loan');
    }
}
