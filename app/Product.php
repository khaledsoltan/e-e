<?php

namespace App;
use App\category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public function presentPrice()
    {
         return '$' . number_format($this->price * 289);   
    }
    public function categories()
    {
        return $this->belongsToMany('App\category');
    }

}
