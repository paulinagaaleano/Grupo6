@extends('plantilla')

@section('contenido')
<main class="py-5">
    <div class="container">
        
        <h1 class="text-center mb-2" style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 2px;"> COLECCIONES </h1>
        <p class="text-center text-muted mb-5" style="font-family: 'Montserrat';">Encontrá el producto perfecto para resaltar tu brillo natural</p>

        <div class="row g-5">
            
            @foreach($categorias as $categoria)
                <div class="col-12 col-md-6 col-lg-4 mb-4"> 
                    <div class="card h-100 border-0 shadow-sm text-center">
                        
                        <div style="overflow: hidden; height: 300px;">
                            <div class="aura-img-container hover-zoom h-100">
                                <a href="{{ url('/catalogo/' . $categoria->slug) }}">
                                    <img src="{{ asset($categoria->imagen) }}" 
                                         class="w-100 h-100" 
                                         style="object-fit: cover;" 
                                         alt="{{ $categoria->nombre }}">
                                </a>
                            </div>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title fw-bold mt-2" style="font-size: 1.25rem;">{{ $categoria->nombre }}</h3>
                            
                            <p class="card-text text-muted small px-2">
                                {{ $categoria->descripcion }}
                            </p>
                            
                            <div class="mt-auto pt-3">
                                <a href="{{ url('/catalogo/' . $categoria->slug) }}" class="btn btn-light w-10 rounded-0 py-2" style="letter-spacing: 1px; font-size: 0.8rem; border: 1px solid #eee;">
                                    VER MÁS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
</main>
@endsection