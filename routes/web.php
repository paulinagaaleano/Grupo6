<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CarritoController;
/*
|--------------------------------------------------------------------------
| Rutas públicas
|--------------------------------------------------------------------------
*/

// Inicio
Route::get('/', function () {
    return view('pagina-principal');
})->name('inicio');

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
})->name('quienes-somos');

Route::get('/comercializacion', function () {
    return view('comercializacion');
})->name('comercializacion');

Route::get('/consultas', function () {
    return view('consultas');
})->name('consultas');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/terminos', function () {
    return view('terminos');
})->name('terminos');

/*Route::get('/coleccion', function () {
    return view('coleccion');
});*/

Route::get('/coleccion', [ProductoController::class, 'mostrarColecciones']);

Route::get('/catalogo', [ProductoController::class, 'mostrarColecciones']);

Route::get('/catalogo/todos', [ProductoController::class, 'mostrarTodos'])->name('catalogoCompleto');;

Route::get('/catalogo/{categoria}', [ProductoController::class, 'mostrarCategoria']);

Route::get('/construccion', function () {
    return view('construccion');
})->name('construccion');

/*
|--------------------------------------------------------------------------
| Registro, Login y Logout
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'formularioLogin'])->name('login');
Route::post('/login', [AuthController::class, 'autenticar'])->name('login.guardar');

Route::get('/registro', [AuthController::class, 'formularioRegistro'])->name('registro');
Route::post('/registro', [AuthController::class, 'registrar'])->name('registro.guardar');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Rutas protegidas
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::get('/cliente/dashboard', [ClienteController::class, 'index'])
    ->name('cliente.dashboard');

Route::get('/carrito', [ClienteController::class, 'index'])
    ->name('carrito');


Route::middleware(['auth'])->group(function () {

//Route::middleware(['auth', 'rol:cliente'])->group(function () {
 // Mostrar el carrito
 Route::get('/carrito', [CarritoController::class, 'index'])->name('cliente.carrito');
 // Agregar un producto
 Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])
 ->name('carrito.agregar');
 // Eliminar un producto
 Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])
 ->name('carrito.eliminar');
 // Confirmar la compra
 Route::post('/carrito/confirmar', [CarritoController::class, 'confirmar'])->name('carrito.confirmar');


Route::get('/usuario/compra', function () {
    return view('backend.usuarios.compra');
})->name('compra');

 // Vista de compra confirmada (protegida: redirige si no hay sesión)
 Route::get('/compra-confirmada', function () {
 if (!session('total')) {
 return redirect()->route('cliente.dashboard');
 }
 return view('backend.usuarios.compra');
 })->name('compra.confirmada');
});