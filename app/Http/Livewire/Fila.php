<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Fila extends Component
{
    public $datos;

    public function mount($datos){
        $this->datos = $datos;
    }
    
    public function render()
    {
        return view('livewire.fila');
    }
}
