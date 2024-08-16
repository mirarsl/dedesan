<?php

namespace App\Http\Livewire;

use App\Project;
use Livewire\Component;

class Category extends Component
{
    public $data;
    public $slug;
    public $active_id = null;
    public $list = [];
    public function render()
    {
        if(empty($this->data)){
            $this->data = Project::where('service_id',null)->active()->order()->get();
            $this->activeList();
        }
        return view('livewire.category');
    }

    public function activeList($id = null) {
        if(!(empty($id))){
            $data = Project::where('id',$id)->first();
        }else
        if(!(empty($this->active_id))){
            $data = Project::where('id',$this->active_id)->first();
        }
        array_push($this->list,$data->id);
        if(!(empty($data->parent))){
            $this->activeList($data->parent->id);
        }
    }
}
