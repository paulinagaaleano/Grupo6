<?php

namespace App\Http\Controllers;


use App\Models\User; 
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function dashboard()
{
    // 1. Buscamos todos los usuarios de la base de datos
    $usuarios = User::all();
    
    // 2. Le pasamos a la vista SOLO la variable 'usuarios' limpia
    return view('backend.admin.dashboard', compact('usuarios'));
}
}