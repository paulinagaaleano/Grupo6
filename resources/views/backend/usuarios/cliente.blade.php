@extends('plantilla')

@section('contenido')
<div class="container py-5" style="max-width: 800px;">
    <div class="card shadow-sm border-0 rounded-3 p-5 text-center bg-white">
        <h1 style="font-family: 'Playfair Display'; font-size: 2.5rem; font-weight: 700;" class="mb-3">
            ¡Bienvenido a tu cuenta en Aura Beauty!
        </h1>
        <p class="text-muted mb-4" style="font-family: 'Montserrat'; font-size: 0.95rem;">
            Este es tu panel de cliente. Desde acá vas a poder seguir el estado de tus pedidos, revisar tu historial y gestionar tu carrito.
        </p>
        
        {{-- HILERA DE ACCIONES DEL CLIENTE --}}
        <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center gap-2 mt-2">
            
            {{-- Botón 1: Carrito --}}
            <a href="{{ route('cliente.carrito') }}" class="btn btn-dark btn-sm rounded-0 px-3 py-2 fw-semibold text-uppercase w-100 w-sm-auto" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                <i class="bi bi-bag-heart me-1"></i> Ver mi Carrito
            </a>

            {{-- 🌟 NUEVO BOTÓN 2: HISTORIAL DE COMPRAS 🌟 --}}
            <a href="{{ route('backend.usuarios.mis_compras') }}" class="btn btn-dark btn-sm rounded-0 px-3 py-2 fw-semibold text-uppercase w-100 w-sm-auto" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                <i class="bi bi-journal-text me-1"></i> Mis Compras
            </a>

            {{-- Botón 3: Cerrar Sesión (Estilizado para que no desentone) --}}
            <form action="{{ route('logout') }}" method="POST" class="d-inline w-100 w-sm-auto">
                @csrf
                <button type="submit" class="btn btn-outline-secondary btn-sm rounded-0 px-3 py-2 text-uppercase w-100 w-sm-auto" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                    Cerrar Sesión
                </button>
            </form>
            
        </div>
    </div>
</div>
@endsection