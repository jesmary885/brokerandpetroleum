<?php

namespace App\Http\Livewire\Admin;

use App\Models\Fase;
use Livewire\Component;
use Livewire\WithPagination;

class Fases extends Component
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

        $fases = Fase::where('name', 'LIKE', '%' . $this->search . '%')
        ->latest('id')
        ->paginate(10);

        return view('livewire.admin.fases',compact('fases'));
    }
}
