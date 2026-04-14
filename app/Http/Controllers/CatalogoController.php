<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller 
{
    // Solo UNA vez la función index
    public function index() {
        // ... (aquí van tus categorías manuales que ya tenías)
        return view('index', compact('categorias'));
    }

    // Solo UNA vez la función show
    public function show($categoria) {
        return view('productos', compact('categoria'));
    }
} // Esta llave cierra la clase. Asegurate de que NO haya nada después.