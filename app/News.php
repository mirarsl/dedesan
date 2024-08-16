<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class News extends Model
{
 public function scopeActive($query)
 {
  return $query->where('status', 1);
 }
 
 public function scopeOrder($query)
 {
  return $query->orderBy('ordering')->orderBy('id','desc');
 }
 
 public function date() {
  $date = \Carbon\Carbon::parse($this->created_at);
  $date->setLocale('tr');
  return $date;
 }

 public function short_text() {
  return mb_substr(strip_tags($this->text),0,100).'..';
 }

}
