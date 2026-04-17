<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index()
    {
        $carrito = session()->get('carrito', []);
        return view('carrito', compact('carrito'));
    }

    public function agregar(Request $request)
    {
        $carrito = session()->get('carrito', []);

        $carrito[] = [
            "nombre" => $request->nombre,
            "precio" => $request->precio,
            "img" => $request->img
        ];

        session()->put('carrito', $carrito);

        return redirect()->route('carrito.index')
            ->with('success', 'Producto agregado al carrito');
    }

    public function limpiar()
    {
        session()->forget('carrito');
        return redirect()->route('carrito.index');
    }
}