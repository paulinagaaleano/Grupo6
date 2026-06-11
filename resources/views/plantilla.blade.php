<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
</head>

<body>

@include('partes.nav')

<main>
    @if(session('success'))

@endif
    @yield('contenido')
</main>

@include('partes.footer')

</body>
</html>