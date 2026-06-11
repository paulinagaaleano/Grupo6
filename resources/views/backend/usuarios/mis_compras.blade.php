@extends('plantilla')

@section('contenido')
<div class="container py-5">
    <h2 class="mb-4" style="font-family: 'Playfair Display'; font-weight: 700;">
        @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
            Historial de ventas
        @else
            Mis Compras
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
                        <th class="text-center">ESTADO / ACCIONES</th>
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
                            
                            {{-- 🌟 COLUMNA DE ACCIONES INTEGRADA Y MODIFICADA 🌟 --}}
                            <td>
                                <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center gap-2">
                                    @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
                                        <span class="badge bg-success text-white px-3 py-2 rounded-0 small">CONFIRMADA</span>
                                    @else
                                        <span class="badge bg-dark text-white px-3 py-2 rounded-0 small">PAGADO</span>
                                    @endif

                                    {{-- El botón dinámico vinculado al ID de cada fila individual --}}
                                    <a href="{{ route('compras.factura', $venta->id) }}" target="_blank" class="btn btn-sm btn-outline-dark rounded-0 px-3 fw-semibold small" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                                        <i class="bi bi-file-earmark-pdf me-1"></i> Factura
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    @if($ventas->count() === 0)
                        <tr>
                            <td colspan="@if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin') 6 @else 5 @endif" class="text-center py-4 text-muted">
                                No se registran operaciones en el sistema.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection