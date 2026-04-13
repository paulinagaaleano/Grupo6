<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pagina-principal');
});


Route::redirect('/pagina-principal', '/');

Route::get('/quienes-somos', function () {
    return view('quienes-somos'); 
});

Route::get('/catalogo', function () { return view('catalogo'); });
Route::get('/comercializacion', function () { return view('comercializacion'); });