<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanPayment extends Model
{
    protected $fillable = [
        'loan_amount_paid', 'total_amount_paid',
    ];

    public function user() {
        return $this->belongsTo('App\Loans');
    }
}
