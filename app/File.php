<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable=[
        'user_id',
        'file_path',
        'original_filename',
    ];

    public function customer() {
        return $this->belongsTo('App\User');
    }
}
