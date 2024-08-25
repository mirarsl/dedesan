<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ProjectBlock extends Model
{
 public function scopeOrder($query)
 {
  return $query->orderBy('ordering')->orderBy('id', 'desc');
 }
 
 function apartments(){
  return $this->hasMany(ProjectBlockApartment::class,'block_id','id');
 }

 function leftCount(){
  return count($this->hasMany(ProjectBlockApartment::class,'block_id','id')->where('type',1)->get());
 }

 
}
