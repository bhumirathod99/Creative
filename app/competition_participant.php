<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class competition_participant extends Model
{
     protected $fillable = [
        'name', 'email', 'password','mobile_number','address','image'
    ];
}
