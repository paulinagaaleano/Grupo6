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
<div class="container mt-5">
    <h2 class="text-uppercase fw-bold text-center mb-5">{{ ucfirst($categoria) }}</h2>
    
    <div class="row g-4">
        <div class="col-6 col-md-4 text-center">
            <div class="product-image-container border p-3">
                <img src="/img/{{ $categoria }}_ejemplo.jpg" class="img-fluid" alt="Producto">
            </div>
            <h4 class="mt-3">{{ $categoria }}</h4>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>