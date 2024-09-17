<?php

namespace App\Livewire;

use App\Models\Anotations;
use Livewire\Component;

class Form extends Component
{
    public $title;
    public $content;

    public function save(){
        Anotations::create([
            "title"=> $this->title,
            "content"=>$this->content
        ]);

        $this->reset();
        $this->dispatch("Envio");
    }

    public function render()
    {
        return view('livewire.form');
    }
}
