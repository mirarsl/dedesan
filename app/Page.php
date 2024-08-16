<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Page extends Model
{
    function modules() {
        return $this->belongsToMany(Module::class,"page_modules",'page_id','module_id');
     }

     function data() {
        $page = $this->belongsTo(\TCG\Voyager\Models\DataType::class,'table','id')->first();
        if(empty($page)) return null;
        $data = app($page->model_name)->orderBy('ordering')->orderBy('id','desc');
        $data = $data->paginate(12);
        if(empty($data)) return false;
        return $data;
    }
}
