<?php

namespace App\Http\Livewire\Solicitudes;

use App\Http\Livewire\Admin\Solicitudes;
use App\Models\Solicitudes as ModelsSolicitudes;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
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

        $solicituds = ModelsSolicitudes::where('user_id',auth()->user()->id)
            ->where('id', 'LIKE', '%' . $this->search . '%')
            ->latest('id')
            ->paginate(10);


        return view('livewire.solicitudes.index',compact('solicituds'));
    }
}
