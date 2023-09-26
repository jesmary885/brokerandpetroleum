<?php

namespace App\Http\Livewire\Menu;

use App\Models\Producto;
use Livewire\Component;

class Categorias extends Component
{
    public function render()
    {
        $productos = Producto::where('page_view','si')->get();

        return view('livewire.menu.categorias',compact('productos'));
    }
}
