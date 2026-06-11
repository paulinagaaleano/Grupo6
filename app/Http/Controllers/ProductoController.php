<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function mostrarColecciones()
    {
        $categorias = Categoria::all();
        
        return view('coleccion', compact('categorias'));
    }

    public function mostrarCategoria($categoria)
    { 
        // Buscamos la categoría por su slug (ej: "bases"). Si no existe, tira error 404.
        $cat = \App\Models\Categoria::where('slug', $categoria)->firstOrFail();

        // Por la relación que armamos en el Modelo, podemos traer sus productos:
        $productos = $cat->productos;

        // Le mandamos a la vista los productos y el nombre real de la categoría
        return view('catalogo.categorias', [
        'productos' => $productos,
        'categoria' => $cat->nombre // Pasamos el nombre lindo (ej: "Bases")
        ]);
    }

    public function mostrarTodos(){
    
    // Traemos TODOS los productos de SQLite (Laravel ignora solitos los SoftDeletes)
    $productos = Producto::all();

    // Mandamos los datos a una nueva vista
    return view('catalogo.todos', compact('productos'));
    }
    
    public function index()
{

$categorias = Categoria::all();
    // Trae los productos paginados para el panel de administración
    $productos = Producto::with('categoria')->paginate(10); 
    return view('backend.admin.productos.create', compact('categorias', 'productos'));
}

public function create()
{
    $categorias = Categoria::all(); // Necesario para el select del formulario
    return view('backend.admin.productos.create', compact('categorias'));
}

public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'precio' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'categoria_id' => 'required|exists:categorias,id', // Validación de relación
        'imagen' => 'required|string|max:255',
    ]);

    Producto::create($request->all());

    return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');
}

public function edit(Producto $producto)
{
    $categorias = Categoria::all();
    return view('backend.admin.productos.edit', compact('producto', 'categorias'));
}

public function update(Request $request, Producto $producto)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'precio' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'categoria_id' => 'required|exists:categorias,id',
    ]);

    $producto->update($request->all());

    return redirect()->route('productos.index')->with('success', 'Producto actualizado.');
}

public function destroy(Producto $producto)
{
    // Borra el producto de la base de datos
    $producto->delete();

    // Redirecciona de vuelta con un mensaje de éxito limpio
    return redirect()->back()->with('success', 'El producto fue eliminado correctamente del catálogo.');
}

}
