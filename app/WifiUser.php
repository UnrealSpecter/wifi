<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WifiUser extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email'];
}
