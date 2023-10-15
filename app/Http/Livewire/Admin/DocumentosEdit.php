<?php

namespace App\Http\Livewire\Admin;

use App\Models\Documentos;
use App\Models\Fase;
use Livewire\Component;
use Livewire\WithFileUploads;

class DocumentosEdit extends Component
{
    use WithFileUploads;

    public $isopen = false,  $name, $fases, $fase_id;
    public $accion,$documento;

    public function mount(Documentos $documento, $accion){
        $this->documento = $documento;
        $this->accion = $accion;
        $this->fases = Fase::all();

        if($documento){
            $this->name = $documento->name;
            $this->fase_id = $documento->fase_id;
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
        'fase_id' => 'required',
        'name' => 'required',

    ];


    public function render()
    {
        return view('livewire.admin.documentos-edit');
    }

    public function save(){
        $rules = $this->rules;
        $this->validate($rules);

     

        if($this->accion == 'create'){
            $documento = new Documentos();
            $documento->name = $this->name;
            $documento->fase_id = $this->fase_id;
            $documento->save();
        }

        else{
            $this->documento->update([
                'name' => $this->name,
                'fase_id' => $this->fase_id,
            ]);

        }

       
        $this->reset(['name','fase_id','isopen']);
        $this->emitTo('admin.documentos','render');

        $this->emit('alert','Datos registrados correctamente');



    }
}
