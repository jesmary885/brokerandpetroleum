<?php

namespace App\Http\Livewire\Admin;

use App\Models\EstadosProcesosDocumentos;
use Livewire\Component;
use Livewire\WithPagination;

class EstadosDocumentosProcesos extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    protected $listeners = ['render' => 'render'];

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        $estados = EstadosProcesosDocumentos::where('name', 'LIKE', '%' . $this->search . '%')
        ->latest('id')
        ->paginate(10);


        return view('livewire.admin.estados-documentos-procesos',compact('estados'));
    }
}
