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
}
