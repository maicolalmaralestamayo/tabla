<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ModalTabla extends Component
{
    public $datos = ['id_coordenada' => null];
    public $modal = [   'data-toggle' => null,
                        'data-target' => null];

    // protected $listeners = ['CargarDatos'];

    public function mount(){
        // $this->CargarDatos(80);
    }

    public function CargarDatos($id_coordenada){
        $datos = Http::get('http://localhost/gps/public/api/coordenadas/id/'.$id_coordenada)->json();
        $this->datos = $datos['data'];
    }

    public function MostrarModal(){
        $this->modal['data-togle'] = 'modal';
        $this->modal['data-target'] = '#modal-tabla';
    }

    public function OcultarModal(){
        $this->modal['data-togle'] = null;
        $this->modal['data-target'] = null;
    }
    
    public function render()
    {
        return view('livewire.modal-tabla');
    }
}