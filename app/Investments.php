<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investments extends Model
{
    protected $fillable=[
        'invested_amount',
        'investor_application_id',

    ];
    public function customer() {
        return $this->belongsTo('App\InvestorApplication');
    }
}
