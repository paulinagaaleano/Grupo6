<!DOCTYPE html>
<html lang="es">
@include('partes.head') 
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

 @include('partes.nav') 

<div id="carouselAura" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="/img/Carrusel/car2.png" class="d-block w-100" alt="Promoción 1" style="height: 500px; object-fit: cover;">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/Carrusel/car1.png" class="d-block w-100" alt="Promoción 2" style="height: 500px; object-fit: cover;">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/Carrusel/car3.png" class="d-block w-100" alt="Promoción 3" style="height: 500px; object-fit: cover;">
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
                    <img src="/img/Portada-principal/principal.jpg" class="img-fluid" alt="Maquillaje Natural">
                    <div class="p-3">
                        <h6 class="mt-3 fw-bold">Efecto Natural</h6>
                        <p class="small text-muted">Lográ un brillo saludable con nuestro Rubor Líquido.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative overflow-hidden rounded shadow-sm hover-zoom">
                    <img src="/img/Portada-principal/labialm.webp" class="img-fluid" alt="Aplicando Labial">
                    <div class="p-3 text-center">
                        <h6 class="mt-3 fw-bold">Labios Perfectos</h6>
                        <p class="small text-muted">El Tinted Lip Oil combina lo mejor de un tinte labial, un brillo y un tratamiento hidratante en un solo producto..</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative overflow-hidden rounded shadow-sm hover-zoom">
                    <img src="/img/Portada-principal/basep.webp" class="img-fluid" alt="Piel Radiante">
                    <div class="p-3 text-end">
                        <h6 class="mt-3 fw-bold">Piel de Seda</h6>
                        <p class="small text-muted">Una base de larga duración y un acabado mate natural que realza la belleza de tu piel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 @include('partes.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>