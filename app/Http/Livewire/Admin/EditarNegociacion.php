<?php

namespace App\Http\Livewire\Admin;

use App\Models\Documentos;
use App\Models\DocumentosNegociacion;
use App\Models\EstadosProcesosDocumentos;
use App\Models\Fase;
use App\Models\Negociacion;
use Livewire\Component;

class EditarNegociacion extends Component
{
    public $isopen = false,$estados,$negociacion, $fase_id, $documentos, $fases, $edicion, $estado_documento = [], $documentos_negociacion;

    protected $rules = [
        'fase_id' => 'required',
        'estado_documento' => 'required'
    ];
    
    
    public function mount(Negociacion $negociacion){
        $this->negociacion = $negociacion;
        $this->fase_id = $this->negociacion->fase_id;
        $this->fases = Fase::all();
        $this->estados = EstadosProcesosDocumentos::all();



        $this->documentos_negociacion = DocumentosNegociacion::where('negociacion_id', $this->negociacion->id)
        ->get();

       foreach($this->documentos_negociacion as $estado){
            $this->estado_documento[$estado->documentos_id] = $estado->estados_procesos_documentos_id;
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

    public function render()
    {
        $this->documentos = Documentos::where('fase_id',$this->fase_id)->get();

        

       
        
        return view('livewire.admin.editar-negociacion');
    }

    public function save(){

        $rules= $this->rules;
        $this->validate($rules);

       

        if($this->fase_id == 1){
            if($this->documentos_negociacion->isEmpty()){

            
            
                foreach($this->documentos as $documento){
                    $this->negociacion->documentos()->attach([
                        $documento->id => 
                            [
                                'estados_procesos_documentos_id'=>$this->estado_documento[$documento->id]
                            ]
                    ]);
                }
            }

            else{
                foreach($this->documentos_negociacion as $estado){
                    $estado->update([
                        'estados_procesos_documentos_id' => $this->estado_documento[$estado->documentos_id]
                    ]);
                }
            }
        }

        else{

            if($this->negociacion->fase_id != $this->fase_id){

                foreach($this->documentos as $documento){
                    $this->negociacion->documentos()->attach([
                        $documento->id => 
                            [
                                'estados_procesos_documentos_id'=>$this->estado_documento[$documento->id]
                            ]
                    ]);
                }
            }

            else{
                foreach($this->documentos_negociacion as $estado){
                    $estado->update([
                        'estados_procesos_documentos_id' => $this->estado_documento[$estado->documentos_id]
                    ]);
                }
            }
        }

        $this->negociacion->update([
            'fase_id' => $this->fase_id,
        ]);
        

        $this->reset(['isopen']);

        $this->emit('alert','Datos registrados correctamente');

        $this->emitTo('admin.negociaciones','render');

    }
}
