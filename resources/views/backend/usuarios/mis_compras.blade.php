@extends('plantilla')

@section('contenido')
<div class="container py-5">
    <h2 class="mb-4" style="font-family: 'Playfair Display';">
        @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
            Historial de ventas
        @else
            🛍️ Mis Compras
        @endif
    </h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card border-0 shadow-sm rounded-3">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Nº COMPRA</th>
                        <th>FECHA</th>
                        @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
                            <th>CLIENTE</th> {{-- Columna exclusiva para el Admin --}}
                        @endif
                        <th>PRODUCTOS</th>
                        <th>TOTAL</th>
                        <th>ESTADO / ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ventas as $venta)
                        <tr>
                            <td>#{{ $venta->id }}</td>
                            <td>{{ $venta->fecha_venta ? \Carbon\Carbon::parse($venta->fecha_venta)->format('d/m/Y H:i') : 'No registrada' }}</td>
                            
                            @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
                                <td>
                                    <strong>{{ $venta->usuario->nombre ?? 'Usuario Desconocido' }}</strong><br>
                                    <small class="text-muted">{{ $venta->usuario->email ?? '' }}</small>
                                </td>
                            @endif

                            <td>
                                <ul class="list-unstyled mb-0" style="font-size: 0.9rem;">
                                    @foreach($venta->detalles as $detalle)
                                        <li>• {{ $detalle->producto->nombre ?? 'Producto eliminado' }} (x{{ $detalle->cantidad }})</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="fw-bold text-pink">${{ number_format($venta->total, 0, ',', '.') }}</td>
                            <td>
                                @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
                                    {{-- PERMISOS DE ADMIN: Puede cambiar el estado si quisieras, o ver un control extendido --}}
                                    <span class="badge bg-success text-white px-3 py-2 rounded-0">CONFIRMADA</span>
                                    
                                    {{-- Opcional: Si en tu base de datos manejás despachos, acá podés meter un botón de acción --}}
                                @else
                                    {{-- VISTA DEL CLIENTE: Solo ve que está confirmado --}}
                                    <span class="badge bg-dark text-white px-2 py-1">Pagado e Histórico</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                    @if($ventas->count() === 0)
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">No se registran operaciones en el sistema.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection