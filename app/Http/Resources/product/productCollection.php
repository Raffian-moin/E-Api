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
            'rating'=>$this->reviews->count() > 0 ?round($this->reviews->sum('star')/$this->reviews->count(),2): "no rating yet",
            'href'=>[
                'reviews'=>route('products.show',$this->id)
            ]
        ];
    }
}
