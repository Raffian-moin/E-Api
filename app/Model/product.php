<?php

namespace App\Model;



use App\Model\review;
use Illuminate\Database\Eloquent\Model;

class product extends Model

{
	protected $fillable = [
		'name','price','detail','discount','stock'
	];

    public function reviews(){
    	return $this->hasMany('App\Model\review');
    }
}
