<?php

namespace App\Http\Controllers\Oficina;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view('oficina.index');
    }
}
