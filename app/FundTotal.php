<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class FundTotal extends Authenticatable
{
    protected $fillable=[
        'fund_amount',
        'inv_app_id',
        'funds_total',
    ];
    public function user() {
        return $this->belongsTo('App\InvestorApplication');
    }
    public function fund() {
        return $this->hasmany('App\Funds');
    }
}
