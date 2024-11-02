<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


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

 protected function gallery(): Attribute
 {
  return Attribute::make(
   get: fn ($value) => json_decode($value, true),
   set: fn ($value) => json_encode($value),
  );
 }

 
 
}
