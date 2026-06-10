<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
</head>

<body>

@include('partes.nav')

<main>
    @if(session('success'))
<script>
document.addEventListener('DOMContentLoaded', function() {
    alert("🛒 Producto agregado al carrito correctamente");
});
</script>
@endif
    @yield('contenido')
</main>

@include('partes.footer')

</body>
</html>