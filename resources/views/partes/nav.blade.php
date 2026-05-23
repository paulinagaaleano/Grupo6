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

<nav class="navbar navbar-expand-lg navbar-light bg-white py-2 sticky-top border-bottom">
    <div class="container">

        <a class="navbar-brand fw-bold aura-title" href="/">
            AURA BEAUTY
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-3 text-uppercase" href="#" data-bs-toggle="dropdown">
                        Catálogo
                    </a>

                    <ul class="dropdown-menu border-0 shadow-sm">
                        <li><a class="dropdown-item" href="{{ url('/catalogo/labiales') }}">Labiales</a></li>
                        <li><a class="dropdown-item" href="{{ url('/catalogo/bases') }}">Bases Líquidas</a></li>
                        <li><a class="dropdown-item" href="{{ url('/catalogo/rubores') }}">Rubores</a></li>
                        <li><a class="dropdown-item" href="{{ url('/catalogo/correctores') }}">Correctores</a></li>
                        <li><a class="dropdown-item" href="{{ url('/catalogo/iluminadores') }}">Iluminadores</a></li>
                        <li><a class="dropdown-item" href="{{ url('/catalogo/polvos') }}">Polvos Compactos</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/quienes-somos') }}">Quiénes Somos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/comercializacion') }}">Comercialización</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/consultas') }}">Consultas</a>
                </li>

            </ul>
        </div>

    </div>
</nav>