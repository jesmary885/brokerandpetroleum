<?php

namespace App\Http\Livewire\Admin;

use App\Models\Documentos as ModelsDocumentos;
use Livewire\Component;
use Livewire\WithPagination;

class Documentos extends Component
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

        $documentos = ModelsDocumentos::where('name', 'LIKE', '%' . $this->search . '%')
        ->latest('id')
        ->paginate(10);

        return view('livewire.admin.documentos', compact('documentos'));
    }
}
