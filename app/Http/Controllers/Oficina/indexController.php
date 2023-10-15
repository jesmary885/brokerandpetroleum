<?php

namespace App\Http\Controllers\Oficina;

use App\Http\Controllers\Controller;
use App\Models\Negociacion;
use App\Models\Solicitudes;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){

        $user = auth()->user();

        $solicitudes = Solicitudes::where('user_id',$user->id)
            ->latest('id')
            ->take(7)
            ->get();

        $negociaciones = Negociacion::where('user_id',$user->id)
            ->latest('id')
            ->take(7)
            ->get();

        
        return view('oficina.index',compact('user','solicitudes','negociaciones'));
    }
}
