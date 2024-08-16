<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
     public function scopeOrder($query)
     {
         return $query->orderBy('ordering')->orderBy('id','desc');
     }
}
