<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Tabla extends Component
{
    public $cabecera;
    public $datos;
    public $filtros;

    public function mount($cabecera, $filtros, $dir){
        $this->cabecera = $cabecera;
        $this->filtros = $filtros;
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