<?php

namespace App\Http\Controllers\Oficina;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministracionController extends Controller
{

    public function usuarios(){
        return view('admin.usuarios');
    }

    public function productos(){
        return view('admin.productos');
    }

    public function categorias(){
        return view('admin.categorias');
    }

    public function solicitudes(){
        return view('admin.solicitudes');
    }

    public function negociaciones(){
        return view('admin.negociaciones');
    }

}
