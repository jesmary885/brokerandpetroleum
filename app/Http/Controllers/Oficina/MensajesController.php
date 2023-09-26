<?php

namespace App\Http\Controllers\Oficina;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MensajesController extends Controller
{
    public function entrantes(){
        return view('mensajes.entrantes');
    }

    public function salientes(){
        return view('mensajes.salientes');
    }
}
