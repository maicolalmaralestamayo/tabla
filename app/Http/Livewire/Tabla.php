<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Tabla extends Component
{
    public $cabecera;
    public $datos;

    public function mount($cabecera, $dir){
        $this->cabecera = $cabecera;
        $this->CargarDatos($dir);
    }

    function CargarDatos($dir){
        $this->datos = Http::get($dir)->json();
    }

    public function render()
    {
        return view('livewire.tabla');
    }
}