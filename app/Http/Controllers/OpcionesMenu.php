<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class OpcionesMenu extends Controller
{
    public function cambiar_idioma($idioma){

        session(['locale' => $idioma]);
        App::setLocale($idioma);
        
        return redirect(request()->header('Referer'));
    }
    
}
