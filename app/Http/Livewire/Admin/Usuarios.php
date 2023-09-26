<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

Use Livewire\WithPagination;

class Usuarios extends Component
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
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
        ->orwhere('email', 'LIKE', '%' . $this->search . '%')
        ->latest('id')
        ->paginate(10);

        return view('livewire.admin.usuarios',compact('users'));
    }

    public function activar($value){

        $user = User::where('id',$value)->first()->update([
            'status' => 'Activo'
        ]);

    }

    public function inactivar($value){

        $user = User::where('id',$value)->first()->update([
            'status' => 'Inactivo'
        ]);

    }


}
