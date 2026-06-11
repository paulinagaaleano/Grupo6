@extends('plantilla')

@section('contenido')
<main class="py-5" style="background-color: #fcf8f9;">
    <div class="container">
        
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5 border-bottom pb-4">
            <div class="text-center text-md-start mb-3 mb-md-0">
                <h1 class="m-0 mb-1" style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 2px;"> 
                    NUESTRO CATÁLOGO 
                </h1>
                <p class="m-0 text-muted" style="font-family: 'Montserrat'; font-size: 0.9rem;">
                    Explorá toda nuestra línea de maquillaje diseñada para resaltar tu estilo único.
                </p>
            </div>
            
            {{-- PANEL DE ACCIONES DEL ADMIN: Versión Estilizada y Compacta --}}
            @auth
                @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
                    <div class="d-flex flex-row gap-2 mt-2 mt-md-0">
                        {{-- Botón Volver más pequeño --}}
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary btn-sm rounded-0 px-3 py-2 fw-semibold text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                            <i class="bi bi-arrow-left me-1"></i> Volver
                        </a>
                        {{-- Botón Añadir con el estilo oscuro elegante de Aura --}}
                        <a href="{{ route('productos.create') }}" class="btn btn-dark btn-sm rounded-0 px-3 py-2 fw-bold text-uppercase shadow-sm" style="background-color: #181114; border-color: #181114; font-size: 0.75rem; letter-spacing: 0.5px;">
                            <i class="bi bi-plus-lg me-1"></i> Nuevo Producto
                        </a>
                    </div>
                @endif
            @endauth

        </div>

        {{-- Alertas del sistema globales --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row g-4">
            
            @foreach($productos as $producto)
                <div class="col-12 col-md-6 col-lg-3">
                    
                    {{-- Si el usuario es ADMIN, renderizamos la tarjeta de gestión directamente aquí --}}
                    @auth
                        @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
                            <div class="card h-100 border-0 shadow-sm text-center position-relative p-3">
                                <div class="mb-3">
                                    <img src="{{ asset($producto->imagen) }}" class="img-fluid" alt="{{ $producto->nombre }}" style="max-height: 180px; object-fit: contain;">
                                </div>
                                <div class="card-body d-flex flex-column justify-content-between p-0">
                                    <div>
                                        <h5 class="small fw-bold text-dark mb-2">{{ $producto->nombre }}</h5>
                                        <p class="text-pink fw-bold mb-3">${{ number_format($producto->precio, 0, ',', '.') }}</p>
                                    </div>
                                    
                                    {{-- Botones de Gestión --}}
                                    <div class="d-grid gap-2 mt-auto">
                                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-outline-secondary rounded-0">
                                            <i class="bi bi-pencil-square me-1"></i> Editar
                                        </a>
                                        
                                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que querés eliminar este producto?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger w-100 rounded-0">
                                                <i class="bi bi-trash me-1"></i> Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @else
                            {{-- Si es un cliente común, sigue incluyendo tu tarjeta tradicional --}}
                            @include('partes.tarjeta')
                        @endif
                    @else
                        {{-- Si es un usuario visitante (no logueado), también ve la tarjeta tradicional --}}
                        @include('partes.tarjeta')
                    @endauth
                    
                </div>
            @endforeach

        </div>
    </div>
</main>
@endsection