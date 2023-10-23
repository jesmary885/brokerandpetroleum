<?php

namespace App\Http\Livewire\Admin;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class Productos extends Component
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

      
        $productos = Producto::where('name', 'LIKE', '%' . $this->search . '%')
        ->latest('id')
        ->paginate(10);

        return view('livewire.admin.productos',compact('productos'));
    }

    public function activar($value){

        $user = Producto::where('id',$value)->first()->update([
            'status' => 'Activo'
        ]);

    }

    public function inactivar($value){

        $user = Producto::where('id',$value)->first()->update([
            'status' => 'Inactivo'
        ]);

    }

    public function ver($value){

        $producto = Producto::where('id',$value)->first();

        $this->emit('comment',$producto->other_features);

    }

}
