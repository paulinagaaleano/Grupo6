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


/**
 * Recibe la consulta desde la web y la guarda temporalmente en la SESIÓN.
 */
public function guardarConsultaSimulada(Request $request)
{
    $request->validate([
        'nombre'  => 'required|string|max:255',
        'email'   => 'required|email',
        'asunto'  => 'required|string',
        'mensaje' => 'required|string',
    ]);

    // OBTENEMOS LAS CONSULTAS QUE YA EXISTAN EN LA SESIÓN (o un array vacío si es la primera)
    $consultas = session()->get('consultas_array', []);

    // ARMAMOS LA NUEVA CONSULTA
    $nuevaConsulta = [
        'fecha'   => now()->format('d/m/Y H:i'),
        'nombre'  => $request->nombre,
        'email'   => $request->email,
        'asunto'  => $request->asunto,
        'mensaje' => $request->mensaje,
    ];

    // LA AGREGAMOS AL CONTENEDOR Y GUARDAMOS EN LA SESIÓN
    $consultas[] = $nuevaConsulta;
    session()->put('consultas_array', $consultas);

    return redirect()->back()->with('success', '¡Consulta enviada con éxito! (Simulada en sesión).');
}

/**
 * PRIVADO (ADMIN): Muestra el listado de mensajes temporales acumulados.
 */
public function consultasIndex()
{
    // Leemos el array de la sesión (si no hay ninguno, pasamos un array vacío)
    $consultas = session()->get('consultas_array', []);

    return view('backend.admin.consultas.index', compact('consultas'));
}

/**
 * Guarda las modificaciones de texto de la vista de contacto en la sesión global.
 */
public function updateContactoSimulado(Request $request)
{
    // Almacenamos el array con los nuevos datos ingresados por el admin
    session()->put('datos_contacto', [
        'email_publico'  => $request->email_publico,
        'email_reclamos' => $request->email_reclamos,
        'tel_publico'    => $request->tel_publico,
        'tel_reclamos'   => $request->tel_reclamos,
        'titulares'      => $request->titulares,
        'razon_social'   => $request->razon_social,
        'domicilio'      => $request->domicilio,
    ]);

    return redirect()->back()->with('success', '¡Datos informativos actualizados correctamente!');
}

/**
 * Modifica el rol_id de un usuario específico en la base de datos.
 */
public function cambiarRol(Request $request, $id)
{
    // Buscamos al usuario
    $usuario = Usuario::findOrFail($id);

    // Evitamos que el admin logueado se des-asigne a sí mismo
    if ($usuario->id === auth()->id()) {
        return redirect()->back()->with('error', 'No puedes quitarte los permisos a ti mismo.');
    }

    // Actualizamos el rol_id (1 para Admin, 2 para Cliente)
    $usuario->rol_id = $request->rol_id;
    $usuario->save();

    return redirect()->back()->with('success', "El rol de {$usuario->nombre} fue modificado con éxito.");
}

/**
 * Crea un usuario nuevo directamente asignado con el rol de Administrador (rol_id = 1).
 */
public function crearAdmin(Request $request)
{
    $request->validate([
        'nombre'   => 'required|string|max:255',
        'email'    => 'required|email|unique:usuarios,email', // Valida que el email no esté repetido
        'password' => 'required|string|min:6',
    ]);

    // Registramos en la base de datos
    Usuario::create([
        'nombre'   => $request->nombre,
        'email'    => $request->email,
        'password' => \Hash::make($request->password), // Encriptamos la clave por seguridad
        'rol_id'   => 1, // 👈 Forzamos que sea Rol Administrador de fábrica
    ]);

    return redirect()->back()->with('success', '¡Nuevo administrador registrado exitosamente!');
}
}