@extends('plantilla') 

@section('contenido')

<main class="py-5" style="background-color: #fcf8f9;">
    <div class="container">
        
        <div class="d-flex justify-content-between align-items-center mb-5 border-bottom pb-3">
            <h2 class="m-0" style="font-family: 'Playfair Display'; font-size: 2.5rem;">
                {{ ucfirst($categoria) }}
            </h2>
            
            {{-- BOTÓN EXCLUSIVO PARA EL ADMIN: Añadir Producto --}}
            @auth
                @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
                    <a href="{{ route('productos.create') }}" class="btn btn-dark btn-sm rounded-0 px-3 py-2 fw-bold text-uppercase shadow-sm" style="background-color: #181114; border-color: #181114; font-size: 0.75rem; letter-spacing: 0.5px;">
                            <i class="bi bi-plus-lg me-1"></i> Nuevo Producto
                        </a>
                @endif
            @endauth
        </div>
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <div class="row g-4">
            @foreach($productos as $producto)
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center position-relative">
                        
                        <div class="p-3">
                            <img src="{{ asset($producto->imagen) }}" class="img-fluid" alt="{{ $producto->nombre }}" style="max-height: 200px; object-fit: contain;">
                        </div>
                        
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="small fw-bold text-dark mb-2">{{ $producto->nombre }}</h5>
                                
                                @if($producto->descripcion !== '-')
                                    <p class="small text-muted mb-2">{{ $producto->descripcion }}</p>
                                @endif
                                
                                <p class="text-pink fw-bold fs-5 mb-3">${{ number_format($producto->precio, 0, ',', '.') }}</p>
                            </div>
                            
                            <div class="mt-auto">
                                @auth
                                    @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
                                        {{-- VISTA DEL ADMINISTRADOR: Acciones de gestión --}}
                                        <div class="d-grid gap-2">
                                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-outline-secondary rounded-0">
                                                <i class="bi bi-pencil-square me-1"></i> Editar
                                            </a>
                                            
                                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que querés eliminar este producto? Esta acción no se puede deshacer.');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger w-100 rounded-0">
                                                    <i class="bi bi-trash me-1"></i> Eliminar
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        {{-- VISTA DEL CLIENTE LOGUEADO: Botón comprar --}}
                                        <form action="{{ route('carrito.agregar') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                            <input type="hidden" name="cantidad" value="1">
                                            <button type="submit" class="btn btn-sm btn-dark w-100 rounded-0 py-2"> COMPRAR </button>
                                        </form>
                                    @endif
                                @else
                                    {{-- VISTA DE USUARIOS INVITADOS (No logueados): Botón comprar --}}
                                    <form action="{{ route('carrito.agregar') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                        <input type="hidden" name="cantidad" value="1">
                                        <button type="submit" class="btn btn-sm btn-dark w-100 rounded-0 py-2"> COMPRAR </button>
                                    </form>
                                @endauth
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</main>

@endsection