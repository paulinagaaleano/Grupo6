<!DOCTYPE html>
<html lang="es">
@include('partes.head')

<body>
@include('partes.nav')

<div class="container py-5">

    <h2 class="mb-4">Tu Carrito</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(count($carrito) > 0)

        @php $total = 0; @endphp

        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carrito as $item)
                    <tr>
                        <td>
                            <img src="{{ asset('img/'.$item['img']) }}" width="50">
                            {{ $item['nombre'] }}
                        </td>
                        <td>${{ $item['precio'] }}</td>
                    </tr>

                    @php $total += $item['precio']; @endphp
                @endforeach
            </tbody>
        </table>

        <h4>Total: ${{ $total }}</h4>

        <a href="{{ route('carrito.limpiar') }}" class="btn btn-danger">
            Vaciar carrito
        </a>

    @else

        <p>El carrito está vacío</p>
        <a href="/catalogo" class="btn btn-dark">Volver</a>

    @endif

</div>

@include('partes.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>