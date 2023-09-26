<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Producto;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {

        $categorias = Categoria::all();

        $productos = Producto::where('page_view','si')->get();

        return view('livewire.navigation',compact('categorias','productos'));
    }
}
