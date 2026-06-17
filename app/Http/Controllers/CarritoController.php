<?php

namespace App\Http\Controllers;
use App\Models\VentaCabecera;
use App\Models\Producto;



use Illuminate\Http\Request;

class CarritoController extends Controller
{
   private function obtenerCarrito()
{
    $usuarioId = auth()->id();

    if (!$usuarioId) {
        abort(403, 'Usuario no autenticado.');
    }

    $carrito = VentaCabecera::where('user_id', $usuarioId)
                            ->where('estado', 'carrito')
                            ->first();

    if (!$carrito) {
        // TRUCO: Desactivamos temporalmente las claves foráneas en SQLite para esta inserción
        \DB::statement('PRAGMA foreign_keys = OFF;');

        $carrito = new VentaCabecera();
        $carrito->user_id = $usuarioId;
        $carrito->estado  = 'carrito';
        $carrito->total   = 0;
        $carrito->save();

        // Volvemos a activar por seguridad del resto del sistema
        \DB::statement('PRAGMA foreign_keys = ON;');
    }

    return $carrito;
}

    public function index() 
    { 
        $carrito = $this->obtenerCarrito(); 
        // with('producto') evita N+1: una sola consulta para todos los productos 
        $items = $carrito->detalles()->with('producto')->get(); 
        return view('backend.usuarios.carrito', compact('carrito', 'items')); 
    }

     public function agregar(Request $request) 
    { 
        $request->validate([ 
            'producto_id' => 'required|exists:productos,id', 
            'cantidad'    => 'required|integer|min:1', 
        ]); 
        $producto = Producto::findOrFail($request->producto_id); 
        // Verificar stock antes de agregar 
        if ($producto->stock < $request->cantidad) { 
            return back()->with('error', 'No hay suficiente stock'); 
        } 
        $carrito = $this->obtenerCarrito(); 
        // ¿El producto ya está en el carrito? 
        $item = $carrito->detalles() 
                        ->where('producto_id', $producto->id)->first(); 
        if ($item) { 
            // Si ya existe: suma la cantidad 
            $item->cantidad += $request->cantidad; 
            $item->subtotal  = $item->cantidad * $item->precio_unitario; 
            $item->save(); 
        } else { 
            // Si no existe: crea un nuevo ítem 
            $carrito->detalles()->create([ 
                'producto_id'     => $producto->id, 
                'cantidad'        => $request->cantidad, 
                'precio_unitario' => $producto->precio, 
                'subtotal'        => $producto->precio * $request->cantidad, 
            ]); 
        } 
        $this->recalcularTotal($carrito); 
        return back()->with('success', 'Producto agregado al carrito'); 
    }

    public function eliminar($id)
 {
    $carrito = $this->obtenerCarrito();
    // where('id',$id) evita eliminar ítems de otro carrito
    $carrito->detalles()->where('id', $id)->delete();
    $this->recalcularTotal($carrito);
    return back()->with('success', 'Producto eliminado');
    }


  public function confirmar()
{
    $carrito = $this->obtenerCarrito();
    
    // 1. Validar que el carrito no esté vacío
    if ($carrito->detalles()->count() === 0) {
        return back()->with('error', 'Tu carrito está vacío');
    }

    $items = $carrito->detalles()->with('producto')->get();
    $total = $carrito->total;

    // 2. DESCONTAR STOCK: Recorrer cada producto del carrito y restarle lo comprado
    foreach ($items as $item) {
        $producto = $item->producto;
        if ($producto) {
            $producto->stock -= $item->cantidad;
            $producto->save();
        }
    }

    // 3. Cambiar el estado y guardar la fecha exacta de la compra
    $carrito->update([
        'estado' => 'confirmado',
        'fecha_venta' => now(),
    ]);

    // 4. Redirigir a la pantalla de confirmación pasando los datos necesarios
   return redirect()->route('backend.usuarios.mis_compras')
                 ->with('success', '¡Compra realizada con éxito!');
}

public function misCompras(Request $request)
{
    $rol = strtolower(trim(auth()->user()->rol->nombre));

    if ($rol === 'admin') {
        // 1. Iniciamos la consulta base con sus relaciones necesarias
        $query = VentaCabecera::with([
            'detalles.producto' => function($q) { $q->withTrashed(); }, 
            'usuario'
        ])->where('estado', 'confirmado');

        // 2. Filtro opcional por Cliente (Busca por nombre o email en la tabla relacionada)
        if ($request->filled('buscar_cliente')) {
            $buscar = $request->buscar_cliente;
            $query->whereHas('usuario', function($q) use ($buscar) {
                $q->where('nombre', 'like', "%{$buscar}%")
                  ->orWhere('email', 'like', "%{$buscar}%");
            });
        }

        // 3. Filtro opcional por Fecha Desde
        if ($request->filled('fecha_desde')) {
            $query->whereDate('fecha_venta', '>=', $request->fecha_desde);
        }

        // 4. Filtro opcional por Fecha Hasta
        if ($request->filled('fecha_hasta')) {
            $query->whereDate('fecha_venta', '<=', $request->fecha_hasta);
        }

        // 5. Ordenamos y obtenemos los resultados
        $ventas = $query->orderBy('fecha_venta', 'desc')->get();

    } else {
        // El cliente común sigue viendo solo sus compras de forma regular
        $ventas = VentaCabecera::with([
            'detalles.producto' => function($q) { $q->withTrashed(); }
        ])
        ->where('user_id', auth()->id())
        ->where('estado', 'confirmado')
        ->orderBy('fecha_venta', 'desc')
        ->get();
    }

    return view('backend.usuarios.mis_compras', compact('ventas'));
}


  private function recalcularTotal(VentaCabecera $carrito)
 {
 // sum() suma todos los subtotales de los ítems del carrito
     $total = $carrito->detalles()->sum('subtotal');
     $carrito->update(['total' => $total]);
 }

 /**
 * Incrementa o decrementa la cantidad de un ítem en el carrito de forma segura.
 */
public function actualizarCantidad(Request $request, $id)
{
    $request->validate([
        'operacion' => 'required|in:sumar,restar'
    ]);

    $carrito = $this->obtenerCarrito();
    
    // Buscamos el ítem asegurando que pertenezca al carrito del usuario activo
    $item = $carrito->detalles()->findOrFail($id);
    $producto = $item->producto;

    if ($request->operacion === 'sumar') {
        // Antes de sumar, verificamos que el depósito tenga stock suficiente disponible
        if ($producto->stock < ($item->cantidad + 1)) {
            return back()->with('error', 'Lo sentimos, no hay más stock disponible de este producto.');
        }
        $item->cantidad += 1;
    } else {
        // Si intenta bajar de 1, lo frenamos (para eliminar tiene el otro botón dedicado)
        if ($item->cantidad <= 1) {
            return back()->with('error', 'La cantidad mínima es 1. Si no deseas el producto, presiona Eliminar.');
        }
        $item->cantidad -= 1;
    }

    // Recalculamos los montos del ítem individual
    $item->subtotal = $item->cantidad * $item->precio_unitario;
    $item->save();

    // Recalculamos el total de la cabecera completa de la compra
    $this->recalcularTotal($carrito);

    return back();
}

/**
 * Genera la vista de la factura lista para imprimirse o guardarse en PDF.
 */
public function emitirFactura($id)
{
    // 🌟 El truco mágico: 'detalles.producto' => fn($q) => $q->withTrashed()
    // Esto le dice a Laravel: "Traeme el producto de la compra así tenga baja lógica"
    $compra = VentaCabecera::with([
        'detalles.producto' => function($query) {
            $query->withTrashed();
        }, 
        'usuario'
    ])->findOrFail($id);

    // Seguridad: Validamos usando tu columna real 'user_id'
    if (auth()->user()->rol_id != 1 && $compra->user_id !== auth()->id()) {
        abort(403, 'No tienes permisos para ver esta factura.');
    }

    return view('backend.usuarios.factura', compact('compra'));
}
 
}