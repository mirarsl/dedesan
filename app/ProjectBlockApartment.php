<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ProjectBlockApartment extends Model
{
 private $types = [
  1 => "Devam Ediyor",
  2 => "Satıldı",
 ];
 
 function getType() {
  return $this->types[$this->type];
 }

 public function scopeOrder($query)
 {
  return $query->orderBy('ordering')->orderBy('id', 'desc');
 }
 
}
