<?php

namespace App\Http\Controllers;

use App\Models\Usuario; 
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\VentaCabecera;

class AdminController extends Controller
{
    /**
     * 1. Panel Principal (Dashboard)
     * Muestra la vista principal con el listado de todos los usuarios.
     */
    public function dashboard()
    {
       // 1. Buscamos todos los usuarios
    $usuarios = Usuario::all();
    
    // 2. Contamos la cantidad de productos reales en el catálogo
    $totalProductos = Producto::count(); 
    
    // 3. Contamos las ventas que ya fueron confirmadas por los clientes
    $totalPedidos = VentaCabecera::where('estado', 'confirmado')->count();
    
    // 4. Pasamos absolutamente TODO a la vista usando un array asociativo limpio
    return view('backend.admin.dashboard', [
        'usuarios'       => $usuarios,
        'totalProductos' => $totalProductos,
        'totalPedidos'   => $totalPedidos
    ]);
    }

    /**
     * 2. Formulario de Creación
     * Muestra la vista con el formulario para registrar un nuevo usuario.
     */
    public function create()
    {
        return view('backend.admin.usuarios.create');
    }

    /**
     * 3. Almacenar Usuario
     * Recibe los datos del formulario, los valida y los guarda en la base de datos.
     */
    public function store(Request $request)
    {
        // Validamos que los datos cumplan con lo requerido
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => 'required|string|min:8',
            'rol' => 'required|int'
        ]);

        // Creamos el usuario (recuerda encriptar la contraseña)
        Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'rol' => $request->rol,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Usuario creado exitosamente.');
    }

    /**
     * 4. Ver Detalle de un Usuario
     * Muestra la información específica de un usuario (opcional si usas modales).
     */
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('backend.admin.usuarios.show', compact('usuario'));
    }

    /**
     * 5. Formulario de Edición
     * Busca al usuario por su ID y muestra el formulario con sus datos precargados.
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('backend.admin.usuarios.edit', compact('usuario'));
    }

    /**
     * 6. Actualizar Usuario
     * Valida los cambios y actualiza el registro en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios,email,' . $usuario->id,
            'rol' => 'required|int'
        ]);

        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->rol = $request->rol;

        // Solo actualizamos la contraseña si el admin escribió una nueva
        if ($request->filled('password')) {
            $request->validate(['password' => 'string|min:8']);
            $usuario->password = bcrypt($request->password);
        }

        $usuario->save();

        return redirect()->route('admin.dashboard')->with('success', 'Usuario actualizado correctamente.');
    }

    /**
     * 7. Eliminar Usuario
     * Borra de forma definitiva (o lógica, si usas SoftDeletes) al usuario.
     */
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        
        // Evitar que el admin se elimine a sí mismo (buena práctica)
        if ($usuario->id === auth()->id()) {
            return redirect()->route('admin.dashboard')->with('error', 'No puedes eliminar tu propia cuenta.');
        }

        $usuario->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Usuario eliminado con éxito.');
    }


/**
 * Historial de Compras de todos los clientes para el Admin
 */
public function ventas()
{
    // Buscamos todas las ventas confirmadas con sus usuarios y detalles (Eager Loading)
    $ventas = VentaCabecera::with(['usuario', 'detalles.producto'])
        ->where('estado', 'confirmado')
        ->orderBy('fecha_venta', 'desc')
        ->paginate(15);

    return view('backend.admin.ventas.index', compact('ventas'));
}

/**
 * Permite cambiar el estado del pedido (Procesando, Enviado, Entregado) si fuera necesario
 */
public function actualizarEstadoVenta(Request $request, $id)
{
    $request->validate([
        'estado' => 'required|string' // Ej: 'enviado', 'entregado'
    ]);

    $venta = VentaCabecera::findOrFail($id);
    $venta->update(['estado' => $request->estado]);

    return redirect()->back()->with('success', 'Estado del pedido actualizado.');
}
}