@extends('plantilla')

@section('contenido')
<div class="container mt-4">
    <h2 class="mb-4">Mis Compras</h2>

    @forelse($ventas as $venta)
        <div class="card mb-3">
            <div class="card-header">
                <strong>Compra #{{ $venta->id }}</strong>
                - {{ $venta->fecha_venta->format('d/m/Y H:i') }}
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($venta->detalles as $detalle)
                            <tr>
                                <td>{{ $detalle->producto->nombre }}</td>
                                <td>{{ $detalle->cantidad }}</td>
                                <td>${{ number_format($detalle->precio_unitario, 2) }}</td>
                                <td>${{ number_format($detalle->subtotal, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <h5 class="text-end">
                    Total: ${{ number_format($venta->total, 2) }}
                </h5>
            </div>
        </div>
    @empty
        <div class="alert alert-info">
            Todavía no realizaste ninguna compra.
        </div>
    @endforelse
</div>
@endsection