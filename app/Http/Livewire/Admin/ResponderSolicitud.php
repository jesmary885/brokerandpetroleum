<?php

namespace App\Http\Livewire\Admin;

use App\Mail\SendMailResponse;
use App\Models\Solicitudes;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class ResponderSolicitud extends Component
{
    use WithFileUploads;

    public $isopen = false,$solicitud,$mensaje, $file;

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
        return view('livewire.admin.responder-solicitud');
    }

    public function enviar(){

        if($this->file) {
            $url = Storage::put('public/documentos_solicitudes', $this->file);
            $carga_url = 'si';
        }
        else{
            $url = '';
            $carga_url = 'no';
        }

        $this->solicitud->update([
            'respuesta_adjunta' => $carga_url,
            'respuesta_mensaje' => $this->mensaje,
            'respuesta_archivo' => $url,
            'status' => 'Respuesta enviada'

        ]);

        $objDemo = new \stdClass();

        $objDemo->mensaje = $this->mensaje;
        $objDemo->nombre_usuario = $this->solicitud->user->name;
        $objDemo->subject = 'respuesta de solicitud';
        $objDemo->file = $url;
        $objDemo->carga_url = $carga_url;

        Mail::to("jesmary885@gmail.com")
            ->send(new SendMailResponse($objDemo));


    }
}
