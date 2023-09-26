<?php

use App\Http\Controllers\Oficina\AdministracionController;
use App\Http\Controllers\Oficina\indexController;
use App\Http\Controllers\Oficina\MensajesController;
use App\Http\Controllers\Oficina\NegociacionesController;
use App\Http\Controllers\Oficina\SolicitudesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', WelcomeController::class)->name('inicio');

Route::get('/registro', [UserController::class, 'index'])->name('Registro');

Route::get('search', SearchController::class)->name('search');

Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::middleware(['auth'])->group(function(){

    Route::get('/oficina', [indexController::class, 'index'])->name('oficina.index');

    Route::get('/administracion/usuarios', [AdministracionController::class, 'usuarios'])->name('oficina.usuarios');
    Route::get('/administracion/productos', [AdministracionController::class, 'productos'])->name('oficina.productos');
    Route::get('/administracion/categorias', [AdministracionController::class, 'categorias'])->name('oficina.categorias');
    Route::get('/administracion/solicitudes', [AdministracionController::class, 'solicitudes'])->name('oficina.admin.solicitudes');
    Route::get('/administracion/negociaciones', [AdministracionController::class, 'negociaciones'])->name('oficina.admin.negociaciones');

    Route::get('/solicitudes', [SolicitudesController::class, 'index'])->name('oficina.solicitudes');

    Route::get('/negociaciones', [NegociacionesController::class, 'index'])->name('oficina.negociaciones');

    Route::get('/oficina/mensajes_entrantes', [MensajesController::class, 'entrantes'])->name('oficina.mensajes_entrantes');
    Route::get('/oficina/mensajes_salientes', [MensajesController::class, 'salientes'])->name('oficina.mensajes_salientes');

    Route::get('producto/{producto}',[ProductController::class,'add_img'])->name('producto.add.img');
    Route::post('producto/{producto}/files',[ProductController::class,'img'])->name('producto.img');
});


/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/
