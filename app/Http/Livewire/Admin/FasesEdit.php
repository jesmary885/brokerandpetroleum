<?php

namespace App\Http\Livewire\Admin;

use App\Models\Fase;
use Livewire\Component;
use Livewire\WithFileUploads;

class FasesEdit extends Component
{
    use WithFileUploads;

    public $isopen = false,  $name, $nro;
    public $accion,$fase;

    public function mount(Fase $fase, $accion){
        $this->fase = $fase;
        $this->accion = $accion;

        if($fase){
            $this->name = $fase->name;
            $this->nro = $fase->nro;
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
        return view('livewire.admin.fases-edit');
    }

    public function save(){
        $rules = $this->rules;
        $this->validate($rules);

     

        if($this->accion == 'create'){
            $fase = new Fase();
            $fase->name = $this->name;
            $fase->nro = $this->nro;
            $fase->save();

        }

        else{
            $this->fase->update([
                'name' => $this->name,
                'fase' => $this->fase,
            ]);

        }

       
        $this->reset(['name','fase','isopen']);
        $this->emitTo('admin.fases','render');

        $this->emit('alert','Datos registrados correctamente');



    }
}
