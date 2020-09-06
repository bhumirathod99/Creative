<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project_master extends Model
{
     protected $fillable = [
        'name', 'email', 'password','mobile_number','address','image'
    ];
}
