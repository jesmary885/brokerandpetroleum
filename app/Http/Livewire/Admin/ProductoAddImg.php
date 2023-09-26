<?php

namespace App\Http\Livewire\Admin;

use App\Models\Images;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ProductoAddImg extends Component
{

    public $producto;

    protected $listeners = ['refreshProducto'];

    public function mount(Producto $producto){

        $this->producto = $producto;
    }


    public function render()
    {
        return view('livewire.admin.producto-add-img');
    }

    public function refreshProducto(){
        $this->producto = $this->producto->fresh();
    }

    public function deleteImage(Images $image){
        Storage::delete([$image->url]);
        $image->delete();

        $this->producto = $this->producto->fresh();
    }

    public function regresar(){

        redirect()->route('oficina.productos');
    }
}
