<?php

namespace App\Http\Controllers;

use App\Models\User; 
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
        $usuarios = User::all();
        
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
        // 🌟 CORREGIDO: Cambiado 'nombre' por 'name' para que coincida con el objeto y el PDF
        $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|email|unique:users,email',
           'password' => 'required|min:6|confirmed', // Mínimo 6 caracteres según tu PDF
           'rol' => 'required|string', // Atributo 'rol' de tipo texto exigido por la cátedra
        ]);

        // Guardamos el registro en la base de datos de forma limpia
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encriptación segura de contraseña
            'rol' => $request->rol, // Guarda 'admin' o 'cliente' tal como indica tu guía 
        ]);

        return redirect()->route('usuarios.index')->with('exito', 'Usuario registrado correctamente.');
    }

    /**
     * Muestra un usuario específico (No implementado en este caso).
     */
    public function show(User $usuario)
    {
        //
    }

    /**
     * Muestra el formulario para editar el recurso.
     */
    public function edit(User $usuario)
    {
        return view('backend.usuarios.edit', compact('usuario'));
    }

    /**
     * Actualiza el usuario especificado en la base de datos.
     */
    public function update(Request $request, User $usuario)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $usuario->id,
            'rol' => 'required|string',
         ]);

         $usuario->update($request->only(['name', 'email', 'rol']));

         return redirect()->route('usuarios.index')->with('exito', 'Usuario actualizado.');
    }

    /**
     * Elimina el usuario del almacenamiento.
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('exito', 'Usuario eliminado con éxito.');  
    }
}