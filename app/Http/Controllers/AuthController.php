<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Mostrar formulario de registro
     */
    public function formularioRegistro()
    {
        return view('backend.usuarios.registro');
    }

    /**
     * Mostrar formulario de login
     */
    public function formularioLogin()
    {
        return view('backend.usuarios.login');
    }

    /**
     * Registrar usuario
     */
    public function registrar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $rolCliente = Rol::where('nombre', 'cliente')->first();

        Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => $rolCliente->id,
        ]);

        return redirect()
            ->route('login')
            ->with('success', '¡Registro exitoso! Ya podés iniciar sesión.');
    }

    /**
     * Iniciar sesión
     */
    public function autenticar(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $usuario = Auth::user();

            // Limpiar texto del rol
            $rol = strtolower(trim($usuario->rol->nombre));

            // Redirección según rol
            if ($rol === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            if ($rol === 'cliente') {
                return redirect()->route('cliente.dashboard');
            }

            // Si el rol no existe
            Auth::logout();

            return redirect()
                ->route('login')
                ->withErrors([
                    'email' => 'El usuario no tiene un rol válido.',
                ]);
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden.',
        ]);
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}