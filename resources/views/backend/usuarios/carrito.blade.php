@extends('plantilla')

@section('contenido')
<main class="py-5" style="background-color: #fcf8f8; min-height: 85vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                
                {{-- Alertas de error por si el controlador frena un intento forzado --}}
                @if(session('error'))
                    <div class="alert alert-danger rounded-4 mb-4 border-0 shadow-sm p-3 text-center" style="font-family: 'Montserrat', sans-serif; color: #a94442; background-color: #f2dede;">
                        ⚠️ {{ session('error') }}
                    </div>
                @endif

                {{-- Card Contenedora Principal --}}
                <div class="card border-0 shadow-sm rounded-4 p-4" style="background-color: #ffffff;">
                    <h2 class="mb-4 text-center fw-light" style="color: #6c5b5b; font-family: 'Montserrat', sans-serif; letter-spacing: 1px;">
                        Tu Carrito
                    </h2>

                    {{-- 🛒 VALIDACIÓN DE CARRITO VACÍO --}}
                    @if($items->isEmpty())
                        
                        {{-- Estado: Carrito Vacío --}}
                        <div class="text-center py-5" style="font-family: 'Montserrat', sans-serif;">
                            <div class="mb-4" style="font-size: 3.5rem; color: #f1b3b3;">🛍️</div>
                            <h4 class="fw-normal mb-3" style="color: #6c5b5b;">Tu carrito está vacío</h4>
                            <p class="text-muted small mb-4">¡Aún no agregaste ningún maquillaje a tu pedido!</p>
                            
                            <a href="{{ route('catalogo.todos') }}" class="btn rounded-pill px-4 py-2 text-white text-uppercase mb-3" 
                               style="background-color: #f1b3b3; border: none; font-size: 0.85rem; font-weight: 600; letter-spacing: 0.5px; box-shadow: 0 4px 12px rgba(241, 179, 179, 0.3); transition: all 0.3s;">
                                Explorar Productos
                            </a>
                        </div>

                    @else
                        
                        {{-- Estado: Carrito con Productos (Muestra todo tu diseño original) --}}
                        @php $totalGeneral = 0; @endphp

                        {{-- Tabla de Productos --}}
                        <div class="table-responsive">
                            <table class="table align-middle text-secondary" style="font-family: 'Montserrat', sans-serif;">
                                <thead>
                                    <tr style="border-bottom: 2px solid #f3dcd4; color: #8a7373;">
                                        <th scope="col" class="fw-normal py-3">Producto</th>
                                        <th scope="col" class="fw-normal py-3 text-center">Cantidad</th>
                                        <th scope="col" class="fw-normal py-3 text-end">Precio Unitario</th>
                                        <th scope="col" class="fw-normal py-3 text-end">Subtotal</th>
                                        <th scope="col" class="fw-normal py-3 text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item) 
                                        @php $totalGeneral += $item->subtotal; @endphp
                                        <tr style="border-bottom: 1px solid #f9eae6;"> 
                                            <td class="py-3 fw-medium" style="color: #554444;">
                                                {{ $item->producto->nombre }}
                                            </td> 
                                            <td class="py-3 text-center" style="min-width: 130px;">
    <div class="d-flex align-items-center justify-content-center gap-2">
        
        {{-- BOTÓN DISMINUIR --}}
        <form method="POST" action="{{ route('carrito.actualizarCantidad', $item->id) }}" class="m-0">
            @csrf
            @method('PATCH')
            {{-- Le mandamos cantidad -1 para restar --}}
            <input type="hidden" name="operacion" value="restar">
            <button type="submit" class="btn btn-sm rounded-circle p-0 d-flex align-items-center justify-content-center" 
                    style="width: 26px; height: 26px; background-color:  #f5fcf5; color: #bc7d75; border: 1px solid #fcdada; font-weight: bold; font-size: 0.9rem;"
                    {{ $item->cantidad <= 1 ? 'disabled' : '' }}>
                -
            </button>
        </form>

                {{--CANTIDAD ACTUAL --}}
                <span class="fw-bold px-2" style="color: #554444; font-size: 0.95rem;">
                    {{ $item->cantidad }}
                </span>

                {{-- BOTÓN AUMENTAR --}}
                <form method="POST" action="{{ route('carrito.actualizarCantidad', $item->id) }}" class="m-0">
                    @csrf
                    @method('PATCH')
                    {{-- Le mandamos cantidad +1 para sumar --}}
                    <input type="hidden" name="operacion" value="sumar">
                    <button type="submit" class="btn btn-sm rounded-circle p-0 d-flex align-items-center justify-content-center" 
                            style="width: 26px; height: 26px; background-color: #f5fcf5; color: #bc7d75; border: 1px solid #fcdada; font-weight: bold; font-size: 0.9rem;">
                        +
                    </button>
                </form>

            </div>
        </td>
                                            <td class="py-3 text-end">${{ number_format($item->precio_unitario, 2) }}</td> 
                                            <td class="py-3 text-end fw-semibold" style="color: #bc7d75;">
                                                ${{ number_format($item->subtotal, 2) }}
                                            </td> 
                                            <td class="py-3 text-center"> 
                                                {{-- Botón eliminar con método DELETE --}} 
                                                <form method="POST" action="{{ route('carrito.eliminar', $item->id) }}" class="m-0"> 
                                                    @csrf 
                                                    @method('DELETE') 
                                                    <button type="submit" class="btn btn-sm rounded-pill px-3 py-1 text-uppercase" 
                                                            style="background-color: #fff0f0; color: #e07a7a; border: 1px solid #fcdada; font-size: 0.75rem; font-weight: 600; transition: all 0.2s;">
                                                        Eliminar
                                                    </button> 
                                                </form> 
                                            </td> 
                                        </tr> 
                                    @endforeach 

                                    {{-- Fila de Total Final --}}
                                    <tr style="border-top: 2px solid #f3dcd4; background-color: #fffaf9;">
                                        <td colspan="3" class="text-end py-3 fw-medium" style="color: #6c5b5b; font-size: 1.05rem;">
                                            Total:
                                        </td>
                                        <td class="text-end py-3 fw-bold" style="color: #b36b61; font-size: 1.15rem;">
                                            ${{ number_format($totalGeneral, 2) }}
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        {{-- Sección de Acciones Finales --}}
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-3" style="border-top: 1px solid #f9eae6;">
                            
                            {{-- Botón Seguir Comprando --}}
                            <a href="{{ route('catalogo.todos') }}" class="btn rounded-pill px-4 py-2 text-uppercase" 
                               style="border: 1px solid #f1b3b3; color: #bc7d75; background-color: transparent; font-size: 0.85rem; font-weight: 600; letter-spacing: 0.5px; transition: all 0.3s; text-decoration: none;">
                                ← Seguir comprando
                            </a> 
                            
                            {{-- Botón Confirmar Compra habilitado únicamente con items --}}
                            <a href="{{ route('compra') }}" class="btn rounded-pill px-4 py-2 text-uppercase" 
                               style="background-color: #f1b3b3; border: none; font-size: 0.85rem; font-weight: 600; letter-spacing: 0.5px; box-shadow: 0 4px 12px rgba(241, 179, 179, 0.3); transition: all 0.3s;">
                                Confirmar compra
                            </a> 

                        </div>

                    @endif {{-- Fin de la Validación --}}

                </div> {{-- Fin Card --}}
                
            </div>
        </div>
    </div>
</main>

{{-- Efectos Hover sutiles --}}
<style>
    .btn:hover {
        transform: translateY(-1px);
        filter: brightness(0.96);
    }
    a.btn:hover {
        background-color: #fff0f0 !important;
        color: #b36b61 !important;
    }
</style>
@endsection