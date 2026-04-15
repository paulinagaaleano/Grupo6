<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Beauty</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>

<div id="miniCarruselAnuncios" class="carousel slide bg-aura-banner" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
            <p class="text-center py-2 mb-0 top-bar-text">
                ✨ ENVÍOS GRATIS A PARTIR DE $50.000 ✨
            </p>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <p class="text-center py-2 mb-0 top-bar-text">
                💳 3 CUOTAS SIN INTERÉS EN TODA LA TIENDA 💳
            </p>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <p class="text-center py-2 mb-0 top-bar-text">
                🌿 PRODUCTOS 100% CRUELTY FREE & VEGAN 🌿
            </p>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top border-bottom">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">AURA BEAUTY</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Catálogo
                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="{{ route('catalogo.show', 'labiales') }}">Labiales</a></li>
    <li><a class="dropdown-item" href="{{ route('catalogo.show', 'bases') }}">Bases Líquidas</a></li>
    <li><a class="dropdown-item" href="{{ route('catalogo.show', 'correctores') }}">Correctores</a></li>
</ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/quienes-somos') }}">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/envios') }}">Envíos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/contacto') }}">Contacto</a>
                </li>
                <li class="nav-item">
    <a class="nav-link px-3 d-flex align-items-center" href="{{ url('/login') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-circle me-1" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
        Mi Cuenta
    </a>
</li>
            </ul>
        </div>
    </div>
</nav>

<div id="carouselAura" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="/img/car2.png" class="d-block w-100" alt="Promoción 1" style="height: 500px; object-fit: cover;">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/car1.png" class="d-block w-100" alt="Promoción 2" style="height: 500px; object-fit: cover;">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/car3.png" class="d-block w-100" alt="Promoción 2" style="height: 500px; object-fit: cover;">
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
            <a href="{{ route('catalogo.index') }}" class="btn btn-shop">
            Ver Colecciones
        </a>
        </div>
    </header>
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-family: 'Playfair Display', serif; font-weight: 700;">Sentite tu mejor versión</h2>
            <p class="text-muted" style="font-family: 'Montserrat', sans-serif; letter-spacing: 1px;">Descubrí cómo usar nuestros favoritos de Rare Beauty</p>
        </div>

        <div class="row g-4 align-items-center">
            <div class="col-md-4">
                <div class="position-relative overflow-hidden rounded shadow-sm hover-zoom">
                    <img src="/img/principal.jpg" class="img-fluid" alt="Maquillaje Natural">
                    <div class="p-3">
                        <h6 class="mt-3 fw-bold">Efecto Natural</h6>
                        <p class="small text-muted">Lográ un brillo saludable con nuestro Rubor Líquido.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative overflow-hidden rounded shadow-sm hover-zoom">
                    <img src="/img/labialm.webp" class="img-fluid" alt="Aplicando Labial">
                    <div class="p-3 text-center">
                        <h6 class="mt-3 fw-bold">Labios Perfectos</h6>
                        <p class="small text-muted">El Tinted Lip Oil combina lo mejor de un tinte labial, un brillo y un tratamiento hidratante en un solo producto..</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative overflow-hidden rounded shadow-sm hover-zoom">
                    <img src="/img/basep.webp" class="img-fluid" alt="Piel Radiante">
                    <div class="p-3 text-end">
                        <h6 class="mt-3 fw-bold">Piel de Seda</h6>
                        <p class="small text-muted">Una base de larga duración y un acabado mate natural que realza la belleza de tu piel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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

                    <li><a href="{{ route('catalogo.index') }}" class="text-decoration-none text-muted small">Catálogo</a></li>

                    <li><a href="{{ url('/quienes-somos') }}" class="text-decoration-none text-muted small">Quiénes Somos</a></li>

                </ul>

            </div>



            <div class="col-md-4 mb-4">

                <h6 class="fw-bold text-uppercase small">Información</h6>

                <ul class="list-unstyled">

                    <li><a href="{{ url('/envios') }}" class="text-decoration-none text-muted small">Envíos y Pagos</a></li>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>