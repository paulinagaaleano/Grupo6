@extends('plantilla')

@section('contenido')

{{-- Sección Trayectoria --}}
<section class="py-5 bg-light" style="font-family: 'Montserrat', sans-serif;">
    <div class="container">
        <div class="row align-items-center flex-column-reverse flex-md-row">
            
            <div class="col-12 col-md-6 mb-4 mb-md-0 text-center text-md-start">
                <h2 style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 1px;" class="text-dark">
                    Nuestra Trayectoria
                </h2>

                <div class="text-muted lh-base mt-4" style="text-align: justify; font-size: 0.95rem;">
                    <p>
                        Aura Beauty nació en 2025 de la mano de dos apasionadas del cuidado personal, con el firme propósito de acercar productos de cosmética internacional de alta gama a cada rincón del país de forma directa, confiable y segura. 
                    </p>
                    <p>
                        Nos especializamos en la importación exclusiva de la aclamada línea de productos de Rare Beauty, seleccionando rigurosamente cada tono, rubor, base y textura pensando en las necesidades reales y la diversidad de nuestras clientas argentinas.
                    </p>
                    <p>
                        Desde nuestros inicios, nos propusimos derribar las barreras de los envíos internacionales complicados, ofreciendo una experiencia de compra local moderna, transparente y personalizada, donde cada persona pueda encontrar las herramientas ideales para celebrar y resaltar su esencia única.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
                <img src="/img/Logo.png"
                     alt="Aura Beauty"
                     class="img-fluid rounded shadow-sm bg-white p-3"
                     style="max-height: 280px; object-fit: contain;">
            </div>

        </div>
    </div>
</section>

{{-- Sección Misión, Visión y Valores --}}
<section class="container py-5" style="font-family: 'Montserrat', sans-serif;">
    <div class="row g-4">

        <div class="col-12 col-md-4">
            <div class="p-4 shadow-sm bg-white rounded h-100 text-center border-top border-dark border-3">
                <h4 style="font-family: 'Playfair Display'; font-weight: 700;">Misión</h4>
                <p class="text-muted mt-3" style="font-size: 0.95rem; text-align: justify;">
                    Brindar acceso a productos de belleza originales de renombre internacional, garantizando la máxima calidad en el mercado local y ayudando a cada clienta a sentirse segura, auténtica y cómoda con su propio estilo a través del maquillaje.
                </p>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="p-4 shadow-sm bg-white rounded h-100 text-center border-top border-dark border-3">
                <h4 style="font-family: 'Playfair Display'; font-weight: 700;">Visión</h4>
                <p class="text-muted mt-3" style="font-size: 0.95rem; text-align: justify;">
                    Consolidarnos como el e-commerce de referencia a nivel nacional en la comercialización de maquillaje importado, siendo reconocidos de forma indiscutible por la transparencia de nuestras operaciones y la excelencia en el servicio al cliente.
                </p>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="p-4 shadow-sm bg-white rounded h-100 text-center border-top border-dark border-3">
                <h4 style="font-family: 'Playfair Display'; font-weight: 700;">Valores</h4>
                <p class="text-muted mt-3" style="font-size: 0.95rem; text-align: justify;">
                    Nuestros pilares fundamentales son el compromiso inquebrantable con la autenticidad del stock, la responsabilidad en los tiempos de entrega, la honestidad comercial en la cadena de precios y una profunda pasión por el universo estético.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- Sección Características del Servicio --}}
<section class="py-5 bg-light" style="font-family: 'Montserrat', sans-serif;">
    <div class="container">
        <h2 class="text-center mb-5" style="font-family: 'Playfair Display'; font-weight: 700;">
            ¿Por qué elegir Aura Beauty?
        </h2>

        <div class="row g-4 text-center">

            <div class="col-12 col-sm-6 col-md-3">
                <div class="p-3 bg-white shadow-sm rounded h-100">
                    <div class="fs-2 text-dark mb-2">✨</div>
                    <h5 class="fw-bold text-dark" style="font-size: 1rem;">Productos 100% Originales</h5>
                    <p class="text-muted small mt-2">
                        Seleccionamos y verificamos la trazabilidad de cada lote para asegurar artículos auténticos.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="p-3 bg-white shadow-sm rounded h-100">
                    <div class="fs-2 text-dark mb-2">💬</div>
                    <h5 class="fw-bold text-dark" style="font-size: 1rem;">Atención Personalizada</h5>
                    <p class="text-muted small mt-2">
                        Nuestro equipo te asesora a través de canales directos para encontrar tu tono perfecto.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="p-3 bg-white shadow-sm rounded h-100">
                    <div class="fs-2 text-dark mb-2">📦</div>
                    <h5 class="fw-bold text-dark" style="font-size: 1rem;">Envíos a todo el País</h5>
                    <p class="text-muted small mt-2">
                        Despachamos de forma inmediata con empaques protegidos para cuidar tu inversión.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="p-3 bg-white shadow-sm rounded h-100">
                    <div class="fs-2 text-dark mb-2">🛡️</div>
                    <h5 class="fw-bold text-dark" style="font-size: 1rem;">Calidad Garantizada</h5>
                    <p class="text-muted small mt-2">
                        Monitoreamos el almacenamiento de los cosméticos manteniendo intactas sus propiedades.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Sección Equipo Creador --}}
<section class="container py-5" style="font-family: 'Montserrat', sans-serif;">
    <h2 class="text-center mb-5" style="font-family: 'Playfair Display'; font-weight: 700;">
        Equipo Aura
    </h2>

    <div class="row justify-content-center g-4">

        <div class="col-12 col-md-5 text-center">
            <div class="p-4 shadow-sm bg-white rounded h-100">
                <img src="/img/Creadoras/be.jpeg"
                     alt="Esquenazi Brenda"
                     class="rounded-circle mb-3 shadow-sm border"
                     style="width: 140px; height: 140px; object-fit: cover;">
                <h5 class="fw-bold text-dark">Esquenazi Brenda</h5>
                <p class="text-muted mt-2" style="font-size: 0.95rem; text-align: justify;">
                    Cofundadora y Directora Comercial de Aura Beauty. Especialista en análisis de tendencias de cosmética y encargada principal de la gestión de proveedores globales y el asesoramiento personalizado a clientas.
                </p>
            </div>
        </div>

        <div class="col-12 col-md-5 text-center">
            <div class="p-4 shadow-sm bg-white rounded h-100">
                <img src="/img/Creadoras/pg.jpeg"
                     alt="Galeano Paulina"
                     class="rounded-circle mb-3 shadow-sm border"
                     style="width: 140px; height: 140px; object-fit: cover;">
                <h5 class="fw-bold text-dark">Galeano Paulina</h5>
                <p class="text-muted mt-2" style="font-size: 0.95rem; text-align: justify;">
                    Cofundadora y Directora de Operaciones de Aura Beauty. Encargada del diseño estratégico del e-commerce, la identidad estética de la marca, la logística integral y el control de calidad general del sistema.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- Banner de Cierre --}}
<section class="py-5 text-center px-3" style="background-color: #f8e8ee; font-family: 'Montserrat', sans-serif;">
    <div class="container" style="max-width: 700px;">
        <h2 style="font-family: 'Playfair Display'; font-weight: 700;" class="text-dark">
            Belleza que resalta tu esencia
        </h2>
        <p class="mt-3 text-muted" style="font-size: 0.95rem; line-height: 1.6;">
            En Aura Beauty creemos firmemente que el maquillaje no está diseñado para ocultar o cambiar quién sos, sino para actuar como un compañero en tu forma libre y cotidiana de expresarte ante el mundo.
        </p>
        <a href="{{ url('/contacto') }}" class="btn btn-dark mt-3 rounded-0 px-4 py-2 text-uppercase fw-bold shadow-sm" style="background-color: #181114; font-size: 0.75rem; letter-spacing: 1px;">
            Contáctanos
        </a>
    </div>
</section>

@endsection