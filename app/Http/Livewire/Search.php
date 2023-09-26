<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public $open = false;

    public function updatedSearch($value){
        if ($value) {
            $this->open = true;
        }else{
            $this->open = false;
        }
    }

    public function render()
    {

         //Tv de 32" Full HD

         if ($this->search) {
            $products = Producto::where('name', 'LIKE' ,'%' . $this->search . '%')
                                ->take(8)
                                ->get();
        } else {
            $products = [];
        }

        return view('livewire.search',compact('products'));
    }
}
