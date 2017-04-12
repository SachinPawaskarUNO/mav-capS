<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanAmortization extends Model
{
    protected $fillable = [
        'monthly_payment', 'total_amount_paid',
    ];

    public function user() {
        return $this->belongsTo('App\Loans');
    }
}
