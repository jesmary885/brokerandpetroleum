<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function show(Producto $product){
        return view('products.show', compact('product'));
    }

    public function add_img($producto){
        return view('admin.producto.add_img',compact('producto'));
    }

    public function img(Producto $producto, Request $request){

        $request->validate([
            'file' => 'required|image|max:2048'
        ]);
        
        $url = Storage::put('public/storage/productos', $request->file('file'));

        $producto->images()->create([
            'url' => $url
        ]);
    }

    
}
