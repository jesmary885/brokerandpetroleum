<?php

namespace App\Http\Livewire\Admin;

use App\Models\DocumentosNegociacion;
use App\Models\Negociacion;
use Livewire\Component;

class NegociacionesAvances extends Component
{
    public $isopen = false,$negociacion, $procesos_documentos;

    public function mount(Negociacion $negociacion){
        $this->negociacion = $negociacion;

        $this->procesos_documentos=DocumentosNegociacion::where('negociacion_id',$this->negociacion->id)
            ->get();


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
        return view('livewire.admin.negociaciones-avances');
    }
}
