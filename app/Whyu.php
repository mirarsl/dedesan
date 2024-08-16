<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Whyu extends Model
{
 public function scopeOrder($query)
 {
  return $query->orderBy('order')->orderBy('id','desc');
 }
}
