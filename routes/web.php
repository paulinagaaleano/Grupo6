<?php


// 1. Ruta de Inicio (Home)
Route::get('/', function () {
    return view('pagina-principal'); // Tu archivo principal Aura Beauty
});


// Una ruta para cada página, bien clarito
Route::get('/catalogo/labiales', function () {
    return view('catalogo.labiales'); 
})->name('catalogo.labiales');

Route::get('/catalogo/bases', function () {
    return view('catalogo.bases');
})->name('catalogo.bases');

Route::get('/catalogo/correctores', function () {
    return view('catalogo.correctores');
})->name('catalogo.correctores');

Route::get('/catalogo/rubores', function () {
    return view('catalogo.rubores');
})->name('catalogo.rubores');

Route::get('/catalogo/rimmels', function () {
    return view('catalogo.rimmels');
})->name('catalogo.rimmels');

Route::get('/catalogo/iluminadores', function () {
    return view('catalogo.iluminadores');
})->name('catalogo.iluminadores');

Route::get('/catalogo/polvos', function () {
    return view('catalogo.polvos');
})->name('catalogo.polvos');

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


