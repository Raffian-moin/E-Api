<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\review;
use App\Model\product;
use Faker\Generator as Faker;

$factory->define(review::class, function (Faker $faker) {
    return [
    	'product_id'=>function(){
    		return product::all()->random();
    	},
        'customer'=>$faker->name,
        'review'=>$faker->paragraph,
        'star'=>$faker->numberBetween(1,5)
    ];
});
