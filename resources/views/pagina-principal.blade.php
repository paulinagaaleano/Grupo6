<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Beauty </title>
    
    <<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>
    <div id="miniCarruselAnuncios" class="carousel slide bg-dark text-white" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <p class="text-center py-2 mb-0" style="font-size: 0.8rem; letter-spacing: 1px;">
                ✨ ENVÍOS GRATIS A PARTIR DE $50.000 ✨
            </p>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <p class="text-center py-2 mb-0" style="font-size: 0.8rem; letter-spacing: 1px;">
                💄 3 CUOTAS SIN INTERÉS EN TODA LA TIENDA 💄
            </p>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top border-bottom">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">AURA BEAUTY</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

       <div class="navbar-nav ms-auto">
    <a class="nav-link px-3" href="{{ url('/catalogo') }}">Catálogo</a>
    
    <a class="nav-link px-3" href="{{ url('/quienes-somos') }}">Quiénes Somos</a>
    
    <a class="nav-link px-3" href="{{ url('/comercializacion') }}">Envíos</a>
    <a class="nav-link px-3" href="{{ url('/contacto') }}">Contacto</a>
</div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <div id="carouselAura" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselAura" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselAura" data-bs-slide-to="1"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="/img/carrusel1.jpg" class="d-block w-100" alt="Promoción 1" style="height: 600px; object-fit: contain;">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/combo.webp" class="d-block w-100" alt="Promoción 2" style="height: 600px; object-fit: contain;">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAura" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselAura" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
    <header class="hero-banner">
        <div class="container">
            <h1 style="font-family: 'Playfair Display'; font-size: 3rem;"> Productos exclusivos "Rare Beauty"</h1>
            <p>Tu tienda de maquillajes.</p>
            <button class="btn btn-shop">Ver Colección</button>
        </div>
    </header>

   <div class="container mt-5">
    <div class="row g-4"> <div class="col-6 col-md-3 text-center">
    <div class="product-image-container">
        <img src="/img/rubor.jpg" alt="Rubor Liquido">
    </div>
    <h3>Rubor Liquido</h3>
    <p>$20.000</p>
       </div><div class="col-6 col-md-3 text-center">
         <div class="product-image-container">
           <img src="/img/labialm.webp" alt="labial matte">
    </div>
    <h3>Labial Matte</h3>
    <p>$18.000</p>
</div> <div class="col-6 col-md-3 text-center">
         <div class="product-image-container">
           <img src="/img/polvo.webp" alt="polvo">
    </div>
    <h3>Polvo Translucido</h3>
    <p>$25.000</p>
</div>

        </div>
</div>
<footer class="bg-white py-5 border-top mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold">AURA BEAUTY</h5>
                <p class="text-muted small">Realzando tu belleza natural con Rare Beauty.</p>
            </div>

            <div class="col-md-4 mb-4">
                <h6 class="fw-bold text-uppercase small">Navegación</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="text-decoration-none text-muted small">Inicio</a></li>
                    <li><a href="{{ url('/catalogo') }}" class="text-decoration-none text-muted small">Catálogo</a></li>
                    <li><a href="{{ url('/quienes-somos') }}" class="text-decoration-none text-muted small">Quiénes Somos</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-4">
                <h6 class="fw-bold text-uppercase small">Información</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/comercializacion') }}" class="text-decoration-none text-muted small">Envíos y Pagos</a></li>
                    <li><a href="{{ url('/contacto') }}" class="text-decoration-none text-muted small">Contacto</a></li>
                    <li><a href="{{ url('/terminos') }}" class="text-decoration-none text-muted small">Términos y Usos</a></li>
                </ul>
            </div>
        </div>

        <hr class="my-4 text-muted">

        <div class="text-center">
            <p class="text-muted mb-0" style="font-size: 0.75rem;">
                &copy; 2026 Aura Beauty. Todos los derechos reservados.
            </p>
        </div>
    </div>
</footer>
</body>
</html>