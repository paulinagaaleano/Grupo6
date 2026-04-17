<!DOCTYPE html>
<html lang="es">
<@include('partes.head') 

</body>

 @include('partes.nav') 
 <header class="hero-banner">
    <div class="container mt-5">
    <h1 class="text-center mb-5" style="font-family: 'Playfair Display'; font-size: 3rem;">Nuestras Colecciones</h1>

    @foreach($categorias as $categoria)
        <div class="row mb-5 align-items-center border-bottom pb-5">
            <div class="col-md-5">
                <img src="{{ asset('img/Portada/' . $categoria->imagen) }}" 
                     class="img-fluid shadow-sm" 
                     alt="{{ $categoria->nombre }}"
                     style="width: 100%; height: 400px; object-fit: cover;">
            </div>

            <div class="col-md-7 ps-md-5">
                <h2 class="display-5 fw-bold" style="font-family: 'Playfair Display';">{{ $categoria->nombre }}</h2>
                <p class="text-muted lead">Explorá nuestra línea exclusiva de {{ $categoria->nombre }} diseñada para resaltar tu belleza natural con la calidad de Rare Beauty.</p>
                
                <a href="{{ route('catalogo.show', $categoria->slug) }}" class="btn btn-outline-dark btn-lg mt-3" style="border-radius: 0;">
                    Ver productos de {{ $categoria->nombre }}
                </a>
            </div>
        </div>
    @endforeach
</div>
</header>
@include('partes.footer') 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
