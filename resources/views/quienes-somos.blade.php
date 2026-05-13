@extends('plantilla')

@section('contenido')

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 style="font-family: 'Playfair Display'; font-weight: 700;">
                    Nuestra Trayectoria
                </h2>

                <p class="mt-4 text-muted">
                    Aura Beauty nació en 2025 con el propósito de acercar productos de calidad a todo el país.
                    Nos especializamos en importar los mejores productos de Rare Beauty, seleccionando cada tono
                    y textura pensando en nuestras clientas.
                </p>

                <p class="text-muted">
                    Desde nuestros comienzos, buscamos ofrecer una experiencia de compra confiable, moderna y
                    personalizada, donde cada persona pueda encontrar productos que resalten su belleza natural.
                </p>

            
            </div>

            <div class="col-md-6 text-center">
                <img src="/img/nosotros/aura-beauty.jpeg"
                     alt="Aura Beauty"
                     class="img-fluid rounded shadow"
                     style="max-height: 350px; object-fit: cover;">
            </div>

        </div>
    </div>
</section>

<section class="container py-5">
    <div class="row text-center">

        <div class="col-md-4 mb-4">
            <div class="p-4 shadow-sm rounded h-100">
                <h4 style="font-family: 'Playfair Display';">Misión</h4>
                <p class="text-muted mt-3">
                    Brindar productos de belleza originales y de calidad, ayudando a cada clienta a sentirse segura,
                    auténtica y cómoda con su estilo.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="p-4 shadow-sm rounded h-100">
                <h4 style="font-family: 'Playfair Display';">Visión</h4>
                <p class="text-muted mt-3">
                    Convertirnos en una tienda reconocida a nivel nacional por la confianza, calidad y atención
                    personalizada que ofrecemos.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="p-4 shadow-sm rounded h-100">
                <h4 style="font-family: 'Playfair Display';">Valores</h4>
                <p class="text-muted mt-3">
                    Trabajamos con responsabilidad, compromiso, honestidad y pasión por el mundo de la belleza.
                </p>
            </div>
        </div>

    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" style="font-family: 'Playfair Display'; font-weight: 700;">
            ¿Por qué elegir Aura Beauty?
        </h2>

        <div class="row text-center">

            <div class="col-md-3 mb-4">
                <div class="p-3">
                    <h5 class="fw-bold">Productos originales</h5>
                    <p class="text-muted">
                        Seleccionamos productos auténticos y de excelente calidad.
                    </p>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="p-3">
                    <h5 class="fw-bold">Atención personalizada</h5>
                    <p class="text-muted">
                        Te ayudamos a elegir el producto ideal para vos.
                    </p>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="p-3">
                    <h5 class="fw-bold">Envíos al país</h5>
                    <p class="text-muted">
                        Llegamos a distintas zonas para que recibas tu compra.
                    </p>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="p-3">
                    <h5 class="fw-bold">Calidad garantizada</h5>
                    <p class="text-muted">
                        Cuidamos cada detalle para ofrecerte una buena experiencia.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="container py-5">
    <h2 class="text-center mb-5" style="font-family: 'Playfair Display'; font-weight: 700;">
        Equipo Aura
    </h2>

    <div class="row justify-content-center">

        <div class="col-md-4 text-center mb-4">
            <div class="p-4 shadow-sm rounded h-100">
                <img src="/img/Creadoras/be.jpeg"
                     alt="Esquenazi Brenda"
                     class="rounded-circle mb-3"
                     style="width: 150px; height: 150px; object-fit: cover;">

                <h5 class="fw-bold">Esquenazi Brenda</h5>
                <p class="text-muted">
                    Cofundadora de Aura Beauty. Encargada de la selección de productos y atención a clientas.
                </p>
            </div>
        </div>

        <div class="col-md-4 text-center mb-4">
            <div class="p-4 shadow-sm rounded h-100">
                <img src="/img/Creadoras/pg.jpeg"
                     alt="Galeano Paulina"
                     class="rounded-circle mb-3"
                     style="width: 150px; height: 150px; object-fit: cover;">

                <h5 class="fw-bold">Galeano Paulina</h5>
                <p class="text-muted">
                    Cofundadora de Aura Beauty. Encargada de la organización, diseño y gestión de la tienda.
                </p>
            </div>
        </div>

    </div>
</section>

<section class="py-5 text-center" style="background-color: #f8e8ee;">
    <div class="container">
        <h2 style="font-family: 'Playfair Display'; font-weight: 700;">
            Belleza que resalta tu esencia
        </h2>

        <p class="mt-3 text-muted text-center mb-4">
            En Aura Beauty creemos que el maquillaje no cambia quién sos, sino que acompaña tu forma de expresarte.
        </p>

        {{-- boton que lleva a la pagina contacto--}}
        <a href="{{ url('/contacto') }}" class="btn btn-dark mt-3">
            Contactanos
        </a>
    </div>
</section>

@endsection