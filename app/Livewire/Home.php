<?php

namespace App\Livewire;

use App\Models\Anotations;
use Livewire\Component;

class Home extends Component
{
    public $anotations;
    public function mount(){
        $this->anotations = Anotations::all();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
