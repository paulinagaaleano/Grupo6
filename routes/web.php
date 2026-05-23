<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;


// 1. Ruta de Inicio (Home)
Route::get('/', function () {
    return view('pagina-principal'); // Tu archivo principal Aura Beauty
});

// Una ruta para cada página, bien clarito
/*Route::get('/catalogo/labiales', function () {
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

Route::get('/catalogo/iluminadores', function () {
    return view('catalogo.iluminadores');
})->name('catalogo.iluminadores');

Route::get('/catalogo/polvos', function () {
    return view('catalogo.polvos');
})->name('catalogo.polvos');*/

Route::get('/catalogo/{categoria}', [ProductoController::class, 'mostrarCategoria']);

// 4. Ruta de Quiénes Somos
Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

// 5. Ruta de Envíos y Pagos (Comercialización)
Route::get('/comercializacion', function () {
    return view('comercializacion');
});

// 6. Ruta de Contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/consultas', function () {
    return view('consultas');
})->name('consultas');

// 7. Ruta de Mi Cuenta (Login/Registro)
Route::get('/login', function () {
    return view('login');
})->name('login');

// ruta para terminos
Route::get('/terminos', function () {
    return view('terminos');
});

/*Route::get('/coleccion', function () {
    return view('coleccion');
});*/

Route::get('/coleccion', [ProductoController::class, 'mostrarColecciones']);

Route::get('/catalogo', [ProductoController::class, 'mostrarColecciones']);

/*Route::get('/catalogo', function () {
    return view('coleccion');
});*/

Route::get('/construccion', function () {
    return view('construccion'); 
});

