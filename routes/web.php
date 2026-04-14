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

<<<<<<< HEAD
Route::get('/contacto', function () {
    return view('contacto'); 
});

Route::get('/login', function () {
    return view('login');
});

