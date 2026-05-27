@extends('plantilla')

@section('contenido')
<div class="container py-5">
    <div class="card shadow-sm border-0 rounded-3 p-5 text-center bg-white">
        <h1 style="font-family: 'Playfair Display'; font-size: 2.5rem;" class="mb-3">
            ¡Bienvenido a tu cuenta en Aura Beauty!
        </h1>
        <p class="text-muted mb-4">Este es tu panel de cliente. Desde acá vas a poder ver tus compras y gestionar tu carrito.</p>
        
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('carrito') }}" class="btn btn-dark px-4 py-2">
                <i class="bi bi-bag-heart me-2"></i>Ver mi Carrito
            </a>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger px-4 py-2">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</div>
@endsection