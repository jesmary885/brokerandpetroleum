<?php

namespace App\Http\Livewire\Solicitudes;

use App\Models\Solicitudes;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Respuesta extends Component
{
    public $isopen = false,$solicitud;

    public function mount(Solicitudes $solicitud){
        $this->solicitud = $solicitud;
    }

    public function open()
    {
        $this->isopen = true;  
    }
    public function close()
    {
        $this->isopen = false;  
    }


    public function render()
    {
        return view('livewire.solicitudes.respuesta');
    }

    public function download(){

        $value = $this->solicitud->respuesta_archivo;

        //$url = storage_path('app/'.str_replace('-', '/', $value));

        return Storage::download($value,'respuesta'.$this->solicitud->created_at);
    }

}
