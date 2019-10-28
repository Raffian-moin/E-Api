<?php

namespace App\Http\Resources\product;

use Illuminate\Http\Resources\Json\Resource;

class productCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[

            'name'=>$this->name,
            'discount'=>$this->discount,
            'rating'=>$this->review->count() > 0 ?round($this->review->sum('star')/$this->review->count(),2): "no rating yet",
            'href'=>[
                'reviews'=>route('products.show',$this->id)
            ]
        ];
    }
}
