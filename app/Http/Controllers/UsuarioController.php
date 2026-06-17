<?php

namespace App\Http\Controllers;

use App\Models\Usuario; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Muestra el listado de usuarios.
     */
    public function index()
    {
        // Trae todos los usuarios de la tabla 'users'
        $usuarios = Usuario::all();
        
        // Retorna la vista siguiendo la estructura de carpetas exigida en el PDF
        return view('backend.usuarios.index', compact('usuarios'));
    }

    /**
     * Muestra el formulario para crear un nuevo usuario.
     */
    public function create()
    {
        // Retorna la vista de creación dentro de la carpeta obligatoria
        return view('backend.usuarios.create');
    }

    /**
     * Almacena el usuario recién creado en la base de datos.
     */
    public function store(Request $request)
    {
        
        $request->validate([
           'nombre' => 'required|string|max:255',
           'email' => 'required|email|unique:usuarios,email',
           'password' => 'required|min:6|confirmed', // Mínimo 6 caracteres según tu PDF
           'rol_id' => 'required|int', // Atributo 'rol' de tipo texto exigido por la cátedra
        ]);

        // Guardamos el registro en la base de datos de forma limpia
        Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encriptación segura de contraseña
            'rol_id' => $request->rol_id, // Guarda 'admin' o 'cliente' tal como indica tu guía 
        ]);

        return redirect()->route('usuarios.index')->with('exito', 'Usuario registrado correctamente.');
    }

    public function perfil()
{
    return view('backend.usuarios.perfil');
}

    /**
     * Muestra un usuario específico (No implementado en este caso).
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Muestra el formulario para editar el recurso.
     */
    public function edit(Usuario $usuario)
    {
        return view('backend.usuarios.edit', compact('usuario'));
    }

    /**
     * Actualiza el usuario especificado en la base de datos.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuario,email,' . $usuario->id,
            'rol_id' => 'required|int',
         ]);

         $usuario->update($request->only(['nombre', 'email', 'rol_id']));

         return redirect()->route('usuarios.index')->with('exito', 'Usuario actualizado.');
    }

    /**
     * Elimina el usuario del almacenamiento.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('exito', 'Usuario eliminado con éxito.');  
    }

    /**
 * Actualiza los datos del perfil del usuario en sesión.
 */
/**
 * Actualiza los datos de perfil y la contraseña si se solicita.
 */
public function actualizarPerfil(Request $request)
{
    $usuario = auth()->user();

    // 1. Validamos los datos básicos y opcionalmente la clave nueva
    $request->validate([
        'nombre'   => 'required|string|max:255',
        'email'    => 'required|email|max:255|unique:usuarios,email,' . $usuario->id,
        // 'nullable' significa que puede ir vacío; 'confirmed' exige que coincida con password_confirmation
        'password' => 'nullable|string|min:6|confirmed', 
    ]);

    // 2. Modificamos los datos generales
    $usuario->nombre = $request->nombre;
    $usuario->email = $request->email;

    // 3. ¡El truco de seguridad! Solo cambiamos la clave si el input viene con datos
    if ($request->filled('password')) {
        $usuario->password = Hash::make($request->password);
    }

    // 4. Guardamos todo en SQLite de un tirón
    $usuario->save();

    return redirect()->back()->with('success', '¡Tus datos de perfil y credenciales fueron actualizados!');
}
}