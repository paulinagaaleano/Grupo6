<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\UsuarioController;
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

Route::patch('/carrito/actualizar-cantidad/{id}', [CarritoController::class, 'actualizarCantidad'])->name('carrito.actualizarCantidad');

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

 
 Route::get('/compra/factura/{id}', [CarritoController::class, 'emitirFactura'])->name('compras.factura');


 /*
|--------------------------------------------------------------------------
| Rutas admin
|--------------------------------------------------------------------------
*/

    // Panel y CRUD de Usuarios (AdminController)
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    //Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/usuarios/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/usuarios', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/usuarios/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::get('/usuarios/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/usuarios/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/usuarios/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

  
    Route::patch('/usuarios/{id}/cambiar-rol', [AdminController::class, 'cambiarRol'])->name('admin.usuarios.cambiarRol');
    Route::post('/usuarios/crear-admin', [AdminController::class, 'crearAdmin'])->name('admin.usuarios.crearAdmin');

    // Control de Ventas de clientes (Agregados al AdminController)
    Route::get('/ventas', [AdminController::class, 'ventas'])->name('admin.ventas.index');
    Route::put('/ventas/{id}/estado', [AdminController::class, 'actualizarEstadoVenta'])->name('admin.ventas.update');

    // Manipulación de Catálogo de Productos (ProductoController - Recursos)
    // Esto mapea automáticamente index, create, store, edit, update, destroy para el admin
    Route::resource('productos', ProductoController::class);
    
    // Gestión de Roles (RolController)
    Route::resource('roles', RolController::class)->except(['show', 'edit', 'update']);


    Route::get('/admin/consultas-recibidas', [AdminController::class, 'consultasIndex'])->name('admin.consultas.index');
    Route::post('/contacto-update', [AdminController::class, 'updateContactoSimulado'])->name('admin.contacto.update');
});


Route::get('/mis_compras', [CarritoController::class, 'misCompras'])
    ->middleware('auth')
    ->name('backend.usuarios.mis_compras');

Route::get('/perfil', [UsuarioController::class, 'perfil'])
    ->middleware('auth')
    ->name('perfil');

Route::post('/perfil', [UsuarioController::class, 'actualizarPerfil'])
    ->middleware('auth')
    ->name('perfil.actualizar');



// Rutas Públicas de Catálogo (Para los clientes - Fuera del grupo de admin)
Route::get('/colecciones', [ProductoController::class, 'mostrarColecciones'])->name('colecciones');
Route::get('/categoria/{categoria}', [ProductoController::class, 'mostrarCategoria'])->name('categoria.show');
Route::get('/catalogo-completo', [ProductoController::class, 'mostrarTodos'])->name('catalogo.todos');

// 1. Ruta pública para procesar el formulario de contacto
Route::post('/enviar-consulta', [AdminController::class, 'guardarConsultaSimulada'])->name('consultas.store');

