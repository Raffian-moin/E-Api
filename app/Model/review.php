<?php

namespace App\Model;

use App\Model\product;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    public function product(){
    	return $this->belongsTo('App\Model\product');
    }
}
