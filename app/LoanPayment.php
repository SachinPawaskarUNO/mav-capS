<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanPayment extends Model
{
    protected $fillable = [
        'loan_amount_paid', 'loan_amount_verified', 'loan_paid_uid',
    ];

    public function user() {
        return $this->belongsTo('App\Loans');
    }
}
