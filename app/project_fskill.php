<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project_fskill extends Model
{
     protected $fillable = [
        	'user_id' ,'pro_name', 'Description' ,'Project_comp_day' ,'Project_comp_hour' ,'Freelancer_level' ,'Project_budget'
    ];
}
