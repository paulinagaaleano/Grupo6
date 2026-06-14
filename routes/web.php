<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ConsultaController;

/*
|--------------------------------------------------------------------------
| Rutas Públicas (Estáticas y de Información)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pagina-principal');
})->name('inicio');

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
})->name('quienes-somos');

Route::get('/comercializacion', function () {
    return view('comercializacion');
})->name('comercializacion');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/terminos', function () {
    return view('terminos');
})->name('terminos');

Route::get('/construccion', function () {
    return view('construccion');
})->name('construccion');

// Procesamiento del formulario de contacto hacia la Base de Datos
Route::post('/consultas/enviar', [ConsultaController::class, 'enviar'])->name('consultas.enviar');


/*
|--------------------------------------------------------------------------
| Rutas Públicas del Catálogo
|--------------------------------------------------------------------------
*/

Route::get('/catalogo', [ProductoController::class, 'mostrarColecciones'])->name('colecciones');
Route::get('/catalogo/todos', [ProductoController::class, 'mostrarTodos'])->name('catalogoCompleto');
Route::get('/catalogo/{categoria}', [ProductoController::class, 'mostrarCategoria'])->name('categoria.show');


/*
|--------------------------------------------------------------------------
| Registro, Login y Logout (Autenticación)
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'formularioLogin'])->name('login');
Route::post('/login', [AuthController::class, 'autenticar'])->name('login.guardar');

Route::get('/registro', [AuthController::class, 'formularioRegistro'])->name('registro');
Route::post('/registro', [AuthController::class, 'registrar'])->name('registro.guardar');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Rutas Protegidas (Requieren inicio de sesión)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    // Panel de Inicio del Cliente
    Route::get('/cliente/dashboard', [ClienteController::class, 'index'])->name('cliente.dashboard');

    // Gestión Interna del Carrito de Compras
    Route::get('/carrito', [CarritoController::class, 'index'])->name('cliente.carrito');
    Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
    Route::patch('/carrito/actualizar-cantidad/{id}', [CarritoController::class, 'actualizarCantidad'])->name('carrito.actualizarCantidad');
    Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
    Route::delete('/carrito/vaciar', [CarritoController::class, 'vaciar'])->name('carrito.vaciar');
    
    // Flujo de Confirmación de Compra
    Route::post('/carrito/confirmar', [CarritoController::class, 'confirmar'])->name('carrito.confirmar');
    Route::get('/usuario/compra', function () {
        return view('backend.usuarios.compra');
    })->name('compra');

    // Historial de compras del usuario / Ventas generales
    Route::get('/mis_compras', [CarritoController::class, 'misCompras'])->name('backend.usuarios.mis_compras');
    
    // Emisión interactiva de Facturas en PDF
    Route::get('/compra/factura/{id}', [CarritoController::class, 'emitirFactura'])->name('compras.factura');

    // Configuración y actualización del Perfil (Clave incluida)
    Route::get('/perfil', [UsuarioController::class, 'perfil'])->name('perfil');
    Route::put('/perfil/actualizar', [UsuarioController::class, 'actualizarPerfil'])->name('perfil.actualizar');

    /*
    |--------------------------------------------------------------------------
    | Panel de Control Exclusivo del Administrador
    |--------------------------------------------------------------------------
    */
    
    // Dashboard Principal y CRUD de Usuarios
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/usuarios/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/usuarios', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/usuarios/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::get('/usuarios/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/usuarios/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/usuarios/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

    Route::patch('/usuarios/{id}/cambiar-rol', [AdminController::class, 'cambiarRol'])->name('admin.usuarios.cambiarRol');
    Route::post('/usuarios/crear-admin', [AdminController::class, 'crearAdmin'])->name('admin.usuarios.crearAdmin');

    // Gestión permanente de Consultas de la Base de Datos
    Route::get('/admin/consultas', [ConsultaController::class, 'index'])->name('admin.consultas.index');
    Route::patch('/admin/consultas/{id}/leer', [ConsultaController::class, 'marcarLeida'])->name('admin.consultas.leer');

    // Recursos automáticos de Catálogo y Roles
    Route::resource('productos', ProductoController::class);
    Route::resource('roles', RolController::class)->except(['show', 'edit', 'update']);

});