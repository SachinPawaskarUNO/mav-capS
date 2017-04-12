<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithdrawFund extends Model
{
    protected $fillable = [
        'withdraw_amount',
    ];

    public function user() {
        return $this->belongsTo('App\InvestorApplication');
    }
}