<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repayment extends Model
{
    protected $fillable = [
'repayment_amount','total_amnt_paid',
];

    public function user() {
        return $this->belongsTo('App\Trustee');
    }
}
