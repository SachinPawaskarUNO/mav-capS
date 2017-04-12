<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disbursement extends Model
{
    protected $fillable = [
        'disbursement_amount',
    ];

    public function user() {
        return $this->belongsTo('App\Loans');
    }
}
