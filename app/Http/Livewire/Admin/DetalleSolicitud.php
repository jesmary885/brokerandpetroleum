<?php

namespace App\Http\Livewire\Admin;

use App\Models\Solicitudes;
use Livewire\Component;

class DetalleSolicitud extends Component
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
        return view('livewire.admin.detalle-solicitud');
    }
}
