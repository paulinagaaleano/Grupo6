<?php

use Illuminate\Support\Facades\Route;
// Importamos tu controlador
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CarritoController;

Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::get('/carrito/limpiar', [CarritoController::class, 'limpiar'])->name('carrito.limpiar');
/*
|--------------------------------------------------------------------------
| Web Routes - Aura Beauty Project
|--------------------------------------------------------------------------
*/

// 1. Ruta de Inicio (Home)
Route::get('/', function () {
    return view('pagina-principal'); // Tu archivo principal Aura Beauty
});

// 2. Ruta del Catálogo General (Muestra las colecciones: Labiales, Bases, etc.)
Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo.index');

// 3. Ruta de Productos por Categoría (Muestra los productos de UNA colección)
// El {categoria} es el parámetro dinámico (labiales, bases, etc.)
Route::get('/catalogo/{categoria}', [CatalogoController::class, 'show'])->name('catalogo.show');

// 4. Ruta de Quiénes Somos
Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

// 5. Ruta de Envíos y Pagos (Comercialización)
Route::get('/envios', function () {
    return view('envios'); // Asegurate que el archivo se llame envios.blade.php
})->name('envios.pagos');

// 6. Ruta de Contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// 7. Ruta de Mi Cuenta (Login/Registro)
Route::get('/login', function () {
    return view('login');
})->name('login');

// ruta para terminos
Route::get('/terminos', function () {
    return view('terminos');
});


