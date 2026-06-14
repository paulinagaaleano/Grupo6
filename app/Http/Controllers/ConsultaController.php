<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * 1. Almacena la consulta enviada por el formulario de la web.
     */
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre'  => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);

        Consulta::create($request->all());

        return redirect()->back()->with('success', '¡Tu mensaje fue enviado con éxito! Nos comunicaremos pronto.');
    }

    /**
     * 2. Vista del Admin: Muestra todos los mensajes ordenados (No leídos primero).
     */
    public function index()
    {
        // Seguridad: Si no es Admin, rebota
        if (strtolower(trim(auth()->user()->rol->nombre)) !== 'admin') {
            abort(403);
        }

        $consultas = Consulta::orderBy('leida', 'asc')
                             ->orderBy('created_at', 'desc')
                             ->get();

        return view('backend.admin.consultas', compact('consultas'));
    }

    /**
     * 3. Acción del Admin: Cambia el estado del mensaje a Leído.
     */
    public function marcarLeida($id)
    {
        $consulta = Consulta::findOrFail($id);
        $consulta->update(['leida' => true]);

        return redirect()->back()->with('success', 'Mensaje marcado como leído.');
    }
}
