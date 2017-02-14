<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = [
        'newsletter_first_name', 'newsletter_last_name', 'newsletter_email', 'newsletter_user_type',
    ];
}
