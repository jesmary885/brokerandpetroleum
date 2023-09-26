<?php

namespace App\Http\Livewire\Negociaciones;

use App\Models\Negociacion;
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

        $negociaciones = Negociacion::where('id', 'LIKE', '%' . $this->search . '%')
        ->latest('id')
        ->paginate(10);

        return view('livewire.negociaciones.index',compact('negociaciones'));
    }
}
