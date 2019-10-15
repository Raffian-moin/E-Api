<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function review(){
    	return $this->hasMany('App\Model\review');
    }
}
