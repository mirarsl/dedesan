<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
     function data(){
          return $this->hasMany(Project::class,'service_id','id');
     }
     
     public function scopeActive($query)
     {
         return $query->where('status', 1);
     }

     public function scopeOrder($query)
    {
        return $query->orderBy('ordering')->orderBy('id','desc');
    }
}
