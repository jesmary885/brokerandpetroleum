<?php

namespace App\Http\Livewire\Admin;

use App\Models\EstadosProcesosDocumentos;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class EstadosDocumentosProcesosEdit extends Component
{
    use WithFileUploads;

    public $isopen = false,  $name, $color;
    public $accion,$estado;

    public function mount(EstadosProcesosDocumentos $estado, $accion){
        $this->estado = $estado;
        $this->accion = $accion;

        if($estado){
            $this->name = $estado->name;
            $this->color = $estado->color;
        }
    }

    public function open()
    {
        $this->isopen = true;  
    }
    public function close()
    {
        $this->isopen = false;  
    }

    protected $rules = [
        'nro' => 'required',
        'name' => 'required',

    ];


    public function render()
    {

      
        return view('livewire.admin.estados-documentos-procesos-edit');
    }

    public function save(){
        $rules = $this->rules;
        $this->validate($rules);

     

        if($this->accion == 'create'){
            $estado = new EstadosProcesosDocumentos();
            $estado->name = $this->name;
            $estado->color = $this->color;
            $estado->save();

        }

        else{
            $this->estado->update([
                'name' => $this->name,
                'color' => $this->color,
            ]);

        }

       
        $this->reset(['name','color','isopen']);
        $this->emitTo('admin.estados-documentos-procesos','render');

        $this->emit('alert','Datos registrados correctamente');



    }
}
