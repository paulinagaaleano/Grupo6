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
            </ul>
        </div>
    </div>
</nav>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 style="font-family: 'Playfair Display';">Realizamos envios a todo el pais!</h2>
                <p class="mt-4">
                    Trabajamos con Correo Argentino, Andreani & OCA. Aura Beauty realiza el despacho dentro de las 48hrs luego de recibir la confirmacion de compra y los comprobantes pertinentes; una vez realizada la operacion te compartiremos a tu direccion de contacto el codigo de seguimiento correspondiente. Los costos de envio corren por cargo del cliente.
                
            </div>
        </div>
    </div>
</section>
 <section class="py-5 bg-white">

    <section class="py-5 bg-white">

    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <i class="bi bi-credit-card fs-1"></i>
                <h4 class="mt-3">Tarjetas</h4>
                <p>Aceptamos todas las tarjetas de crédito y débito.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-cash-stack fs-1"></i>
                <h4 class="mt-3">Transferencia</h4>
                <p>15% de descuento pagando por transferencia bancaria.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-shield-check fs-1"></i>
                <h4 class="mt-3">Compra Segura</h4>
                <p>Tus datos están protegidos con encriptación SSL.</p>
            </div>
              <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
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
                    <li><a href="{{ url('/catalogo') }}" class="text-decoration-none text-muted small">Catálogo</a></li>
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
</body>
</html>