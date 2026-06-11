<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura AURA-{{ str_pad($compra->id, 6, '0', STR_PAD_LEFT) }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; color: #181114; }
        .logo-factura { font-family: 'Playfair Display', serif; font-weight: 700; letter-spacing: 2px; }
        @media print {
            .no-imprimir { display: none !important; }
            body { background-color: #fff !important; }
            .card { border: none !important; }
        }
    </style>
</head>
<body class="bg-light py-5">

<div class="container bg-white p-5 shadow-sm rounded" style="max-width: 800px;">
    
    <div class="d-flex justify-content-between mb-4 no-imprimir">
        <a href="{{ route('backend.usuarios.mis_compras') }}" class="btn btn-outline-secondary btn-sm rounded-0">
            ← Volver a Compras
        </a>
        <button onclick="window.print();" class="btn btn-dark btn-sm rounded-0" style="background-color: #181114;">
            🖨️ Imprimir o Guardar PDF
        </button>
    </div>

    <div class="row border-bottom pb-4 mb-4">
        <div class="col-6">
            <h1 class="logo-factura m-0">AURA BEAUTY</h1>
            <p class="text-muted small mb-0">Aura Beauty S.A.S.<br>Mendoza 2000, Corrientes, Argentina</p>
        </div>
        <div class="col-6 text-end">
            <h3 class="fw-bold mb-1 text-uppercase" style="letter-spacing: 1px;">Factura</h3>
            <p class="mb-1"><strong>Nº:</strong> AURA-{{ str_pad($compra->id, 6, '0', STR_PAD_LEFT) }}</p>
            {{-- Usamos tu columna fecha_venta --}}
            <p class="text-muted small"><strong>Fecha:</strong> {{ $compra->fecha_venta ? \Carbon\Carbon::parse($compra->fecha_venta)->format('d/m/Y H:i') : '11/06/2026' }}</p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-6">
            <h6 class="text-muted text-uppercase small fw-bold">Facturado a:</h6>
            <p class="mb-1"><strong>Nombre:</strong> {{ $compra->usuario->nombre ?? 'Cliente Regular' }}</p>
            <p class="mb-0 text-muted"><strong>Email:</strong> {{ $compra->usuario->email ?? '' }}</p>
        </div>
        <div class="col-6 text-end">
            <h6 class="text-muted text-uppercase small fw-bold">Detalle de Pago:</h6>
            <p class="mb-1"><strong>Método:</strong> Tarjeta de Crédito/Débito</p>
            <p class="mb-0"><strong>Estado:</strong> <span class="badge bg-success text-uppercase">Abonado</span></p>
        </div>
    </div>

    <table class="table align-middle border-top mb-4">
        <thead class="table-light">
            <tr class="small text-uppercase" style="letter-spacing: 0.5px;">
                <th>Producto</th>
                <th class="text-center">Cant.</th>
                <th class="text-end">Precio Unit.</th>
                <th class="text-end">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            {{-- Recorremos los detalles reales de la VentaCabecera --}}
            @foreach($compra->detalles as $detalle)
<tr>
    <td>{{ $detalle->producto->nombre }}</td> {{-- 👈 Mostrará el nombre real siempre --}}
    <td class="text-center">{{ $detalle->cantidad }}</td>
    <td class="text-end">${{ number_format($detalle->precio_unitario, 2, ',', '.') }}</td>
    <td class="text-end">${{ number_format($detalle->subtotal, 2, ',', '.') }}</td>
</tr>
@endforeach
        </tbody>
    </table>

    <div class="row justify-content-end">
        <div class="col-5">
            <table class="table table-borderless table-sm text-end">
                <tr>
                    <td class="text-muted">Subtotal (Neto):</td>
                    <td class="fw-semibold">${{ number_format($compra->total / 1.21, 2, ',', '.') }}</td>
                </tr>
                <tr>
                    <td class="text-muted">IVA (21%):</td>
                    <td class="fw-semibold">${{ number_format($compra->total - ($compra->total / 1.21), 2, ',', '.') }}</td>
                </tr>
                <tr class="border-top">
                    <td class="fs-5 fw-bold">TOTAL:</td>
                    {{-- Tu columna total --}}
                    <td class="fs-5 fw-bold text-dark">${{ number_format($compra->total, 2, ',', '.') }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="text-center border-top pt-4 mt-5 text-muted small">
        <p class="mb-0">¡Gracias por tu compra en Aura Beauty!</p>
    </div>

</div>

{{-- Disparador automático del cuadro de guardado/impresión --}}
<script>
    window.onload = function() {
        window.print();
    }
</script>

</body>
</html>