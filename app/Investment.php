<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable=[
        'invested_amount',
        'investor_application_id',

    ];
    public function customer() {
        return $this->belongsTo('App\InvestorApplication');
    }
}
