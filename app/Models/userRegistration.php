<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class userRegistration extends Authenticatable
{
      protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'staff_id',
        'password',
    ];
}
