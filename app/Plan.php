<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Plan extends Model
{
 public function typeOf() {
  return $this->type == 0 ? 'Devam Eden Proje':'Tamamlanan Proje';
 }
 public function scopeActive($query)
 {
  return $query->where('status', 1);
 }
 public function scopeOrder($query)
 {
  return $query->orderBy('ordering')->orderBy('id', 'desc');
 }
}
