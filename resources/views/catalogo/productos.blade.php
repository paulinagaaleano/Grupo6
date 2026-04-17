<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $categoria }} - Aura Beauty</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Obliga al cuerpo a ocupar toda la pantalla */
        }
        main {
            flex: 1; /* Esto empuja el footer hacia abajo */
        }
        .text-pink {
            color: #f8c3d5;
        }
        h1 {
            font-family: 'Playfair Display', serif;
            letter-spacing: 1px;
        }
        .product-card {
            transition: transform 0.3s ease;
            background-color: #fff;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .btn-dark {
            background-color: #000;
            border: none;
            letter-spacing: 1px;
            font-weight: 600;
        }
        .breadcrumb-item a {
            color: #f8c3d5;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('partes.nav') 

    <main class="py-5">
        <div class="container">
            
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/catalogo') }}">Catálogo</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $categoria }}</li>
                </ol>
            </nav>
            
            @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <h1 class="text-uppercase fw-bold m-0">{{ $categoria }}</h1>
                    <p class="text-muted small">Mostrando {{ count($productos) }} productos</p>
                </div>
            </div>

            <hr class="mb-5">

            <div class="row g-4">
                @forelse($productos as $prod)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm text-center product-card">
                            <div class="p-3">
                                <img src="{{ asset('img/' . $prod['img']) }}" 
                                     class="img-fluid" 
                                     alt="{{ $prod['nombre'] }}"
                                     style="height: 200px; object-fit: contain;">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="small fw-bold mb-1">{{ $prod['nombre'] }}</h5>
                                <p class="text-pink fw-bold mb-3">${{ $prod['precio'] }}</p>
    <form action="{{ route('carrito.agregar') }}" method="POST">
    @csrf
    <input type="hidden" name="nombre" value="{{ $prod['nombre'] }}">
    <input type="hidden" name="precio" value="{{ $prod['precio'] }}">
    <input type="hidden" name="img" value="{{ $prod['img'] }}">

    <button type="submit" class="btn btn-dark w-100">
        COMPRAR
    </button>
</form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">Todavía no hay productos cargados en esta colección.</p>
                        <a href="{{ url('/catalogo') }}" class="btn btn-outline-dark btn-sm">Volver al catálogo</a>
                    </div>
                @endforelse
            </div>
        </div>
    </main>

    @include('partes.footer') 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>