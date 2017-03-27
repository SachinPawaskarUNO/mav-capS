<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trustee extends Model
{
    protected $fillable=[
        'invested_amount',
        'invested_id',
        'invested_status',
        'loan_id',

    ];
    public function customer() {
        return $this->belongsTo('App\Investments');

    }
    public function loans() {
        return $this->belongsTo('App\Loans');
    }
}
