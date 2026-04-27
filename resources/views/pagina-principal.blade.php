<!DOCTYPE html>
<html lang="es">

<head>
    @include('partes.head')
</head>

<body>
 @include('partes.nav') 

<div id="carouselAura" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="/img/Carrusel/8.png" class="d-block w-100 img-fluid-carrusel" alt="Promoción 1">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/Carrusel/9.png" class="d-block w-100 img-fluid-carrusel" alt="Promoción 2">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/img/Carrusel/5.png" class="d-block w-100 img-fluid-carrusel" alt="Promoción 3">
        </div> </div>

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
        
        <a href="{{ url('/coleccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> Explorar Colecciones</a>
        <a href="{{ url('/catalogo/todosProductos') }}" class="btn btn-dark btn-sm w-10 rounded-0"> Ver Todo</a>
    </div>
</header>

<div class="py-5">
    <div class="container">
        <div class="d-flex flex-column align-items-center text-center mb-5">
            <h2 style="font-family: 'Playfair Display', serif; font-weight: 700;">Sentite tu mejor versión</h2>
            <p class="small text-muted mb-0">Descubrí cómo usar nuestros favoritos de Rare Beauty</p>
         </div>

         <div class="row g-4 align-items-stretch"> 
             
          <div class="col-md-4">
             <div class="card h-100 border-0 shadow-sm overflow-hidden hover-zoom">
            <a href="{{ url('/catalogo/rubores') }}">
                <img src="/img/Portada-principal/principal.jpg" class="card-img-top" alt="Rubor" style="height: 400px; object-fit: cover;">
             </a>
             <div class="card-body d-flex flex-column">
                <h6 class="fw-bold mt-2">Efecto Natural</h6>
                <p class="small text-muted mb-0">Lográ un brillo saludable con nuestro Rubor.</p>
             </div>
           </div>
          </div>

         <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm overflow-hidden hover-zoom">
            <a href="{{ url('/catalogo/labiales') }}">
                <img src="/img/Portada-principal/labialm.webp" class="card-img-top" alt="Labial" style="height: 400px; object-fit: cover;">
            </a>
            <div class="card-body d-flex flex-column text-center">
                <h6 class="fw-bold mt-2">Labios Perfectos</h6>
                <p class="small text-muted mb-0">El Tinted Lip Oil combina lo mejor de un tinte labial, un brillo y un tratamiento hidratante.</p>
            </div>
          </div>
         </div>

          <div class="col-md-4">
           <div class="card h-100 border-0 shadow-sm overflow-hidden hover-zoom">
            <a href="{{ url('/catalogo/bases') }}">
                <img src="/img/Portada-principal/basep.webp" class="card-img-top" alt="Base" style="height: 400px; object-fit: cover;">
            </a>
            <div class="card-body d-flex flex-column text-end">
                <h6 class="fw-bold mt-2">Piel de Seda</h6>
                <p class="small text-muted mb-0">Una base de larga duración y un acabado mate natural que realza tu piel.</p>
            </div>
          </div>
        </div>

    </div>
</div>
 </footer>
     @include('partes.footer')
</footer>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     </body>
</html>