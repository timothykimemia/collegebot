<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminLogin extends Model
{
    protected $fillable = [
        'username', 'password',
    ];
}
