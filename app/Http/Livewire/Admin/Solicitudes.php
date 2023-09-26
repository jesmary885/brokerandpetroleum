<?php

namespace App\Http\Livewire\Admin;

use App\Models\Solicitudes as ModelsSolicitudes;
use Livewire\Component;
use Livewire\WithPagination;

class Solicitudes extends Component
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

        $solicituds = ModelsSolicitudes::where('id', 'LIKE', '%' . $this->search . '%')
        ->latest('id')
        ->paginate(10);

        return view('livewire.admin.solicitudes',compact('solicituds'));
    }
}
