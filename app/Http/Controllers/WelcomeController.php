<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Database\Seeders\ProductoSeeder;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function __invoke()
    {

    $productos = Producto::where('page_view','si')->get();

    

    

    return view('welcome', compact('productos'));

    }


}
