<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WifiUser extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email'];

    protected $casts = [
        'consent1' => 'boolean',
        'consent2' => 'boolean',
    ];
    
}
