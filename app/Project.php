<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    private $types = [
        1 => "Devam Eden",
        2 => "Tamamlanan",
    ];

    function getType() {
        return $this->types[$this->type];
    }
    function speciality()
    {
        return $this->hasMany(ProjectAddtional::class, 'project_id', 'id');
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
