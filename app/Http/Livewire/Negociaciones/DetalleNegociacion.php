<?php

namespace App\Http\Livewire\Negociaciones;

use App\Models\Negociacion;
use Livewire\Component;

class DetalleNegociacion extends Component
{
    public $isopen = false,$negociacion;

    public function mount(Negociacion $negociacion){
        $this->negociacion = $negociacion;
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
        return view('livewire.negociaciones.detalle-negociacion');
    }
}
