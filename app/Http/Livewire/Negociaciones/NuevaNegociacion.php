<?php

namespace App\Http\Livewire\Negociaciones;

use App\Models\Negociacion;
use App\Models\Producto;
use Livewire\Component;

class NuevaNegociacion extends Component
{

    public $producto_id, $productos, $mensaje,$product,$cantidad,$unidad,$frecuencia,$fecha_requerida,$uso,$comentario;

    public $isopen = false;

    protected $rules = [
        'cantidad' => 'required',
        'unidad' => 'required',
        'frecuencia' => 'required',
        'fecha_requerida' => 'required',
        'uso' => 'required',
        'mensaje' => 'required'
    ];


    public function mount(){

        $this->productos = Producto::where('status','Activo')->get();

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
        return view('livewire.negociaciones.nueva-negociacion');
    }

    public function guardar(){
        $rules = $this->rules;
        $this->validate($rules);

        $negociacion = new Negociacion();
        $negociacion->phase = 'Primera';
        $negociacion->user_id = auth()->user()->id;
        $negociacion->producto_id = $this->producto_id;
        $negociacion->comments = $this->mensaje;
        $negociacion->quantity = $this->cantidad;
        $negociacion->unity = $this->unidad;
        $negociacion->frequency = $this->frecuencia;
        $negociacion->product_use = $this->uso;
        $negociacion->date_required = $this->fecha_requerida;
        $negociacion->save();
    
        $this->reset(['isopen','frecuencia','unidad','cantidad','uso','fecha_requerida','mensaje']);
        $this->emit('alert','Solicitud procesada correctamente');
    }
}
