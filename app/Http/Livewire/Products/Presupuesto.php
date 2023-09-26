<?php

namespace App\Http\Livewire\Products;

use App\Models\Producto;
use App\Models\Solicitudes;
use Livewire\Component;

class Presupuesto extends Component
{
    public $tipo,$mensaje,$product,$cantidad,$unidad,$frecuencia,$fecha_requerida,$uso,$comentario;

    public $showingModal = false;

    protected $rules_informacion = [
        'tipo' => 'required',
        'mensaje' => 'required',
    ];

    protected $rules_presupuesto = [
        'tipo' => 'required',
        'cantidad' => 'required',
        'unidad' => 'required',
        'frecuencia' => 'required',
        'fecha_requerida' => 'required',
        'uso' => 'required',
    ];

    public $listeners = [
        'hideMe' => 'hideModal'
    ];

    public function mount(Producto $product){
        $this->product = $product;
    }

    public function showModal(){
        $this->showingModal = true;
    }

    public function hideModal(){
        $this->showingModal = false;
    }

    public function render()
    {
        return view('livewire.products.presupuesto');
    }

    public function save(){

        if($this->tipo != ""){
            if($this->tipo == 'informacion'){
                $rules = $this->rules_informacion;
                $this->validate($rules);
            }
    
            if($this->tipo == 'presupuesto'){
                $rules = $this->rules_presupuesto;
                $this->validate($rules);
            }
    
            $informacion = new Solicitudes();
            $informacion->tipo_solicitud = $this->tipo;
            $informacion->user_id = auth()->user()->id;
            $informacion->producto_id = $this->product->id;
            $informacion->comentario = $this->mensaje;
            $informacion->status = 'pendiente';
    
            if($this->tipo == 'presupuesto'){
                $informacion->cantidad = $this->cantidad;
                $informacion->unidad = $this->unidad;
                $informacion->frecuencia = $this->frecuencia;
                $informacion->uso_producto = $this->uso;
                $informacion->fecha_requerida = $this->fecha_requerida;
                $informacion->comentario = $this->mensaje;
            }
            $informacion->save();
    
            $this->reset(['showingModal']);
            $this->emit('alert','Mensaje enviado correctamente');

        }
    }
}
