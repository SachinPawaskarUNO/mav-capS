<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'loan_title', 'loan_amount', 'loan_duration', 'loan_purpose', 'loan_status',
    ];

    public function user() {
        return $this->belongsTo('App\BusinessApplication');
    }
    public function disbursement() {
        return $this->hasmany('App\Disbursement');
    }
    public function amortize() {
        return $this->hasmany('App\LoanAmortization');
    }
    public function trustee() {
        return $this->hasmany('App\Trustee');
    }
}
