<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pagina-principal');
});


Route::redirect('/pagina-principal', '/');

Route::get('/quienes-somos', function () {
    return view('quienes-somos'); 
});

Route::get('/envios', function () {
    return view('envios'); 
});


use App\Http\Controllers\CatalogoController;

// Ruta para el botón "Ver Colección"
Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo.index');

// Ruta para las categorías (Labiales, Bases, etc.)
Route::get('/catalogo/{categoria}', [CatalogoController::class, 'show'])->name('catalogo.show');