<?php

namespace App\Http\Livewire\Products;

use App\Models\Producto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DownloadFile extends Component
{
    public $product;

    public function mount(Producto $product){

        $this->product = $product;

    }


    public function render()
    {
        return view('livewire.products.download-file');
    }

    public function download(){

        $value = $this->product->file;

        //$url = storage_path('app/'.str_replace('-', '/', $value));

        return Storage::download($value,$this->product->name);
    }
}
