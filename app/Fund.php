<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    //
    protected $fillable=[
        'fund_amount',
        'fund_uid',
        'fund_status',
    ];
    public function user() {
        return $this->belongsTo('App\FundTotal');
    }
}
