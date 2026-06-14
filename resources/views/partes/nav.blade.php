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
    <ul class="navbar-nav ms-auto align-items-center text-nowrap">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-2 text-uppercase" href="#" data-bs-toggle="dropdown">
                Catálogo
            </a>
            <ul class="dropdown-menu border-0 shadow-sm">
                <li><a class="dropdown-item" href="{{ url('/catalogo/labiales') }}">Labiales</a></li>
                <li><a class="dropdown-item" href="{{ url('/catalogo/bases') }}">Bases Líquidas</a></li>
                <li><a class="dropdown-item" href="{{ url('/catalogo/rubores') }}">Rubores</a></li>
                <li><a class="dropdown-item" href="{{ url('/catalogo/correctores') }}">Correctores</a></li>
                <li><a class="dropdown-item" href="{{ url('/catalogo/iluminadores') }}">Iluminadores</a></li>
                <li><a class="dropdown-item" href="{{ url('/catalogo/polvos') }}">Polvos Compactos</a></li>
                <li><a class="dropdown-item" href="{{ url('/catalogo/todos') }}">Todos los productos</a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link px-2" href="{{ url('/quienes-somos') }}">Quiénes Somos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link px-2" href="{{ url('/comercializacion') }}">Comercialización</a>
        </li>

       {{-- 1. Primero le preguntamos a Laravel si hay una sesión iniciada --}}
       @auth
    @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
        {{-- Si es ADMINISTRADOR: Ve la bandeja de entrada con la tabla de mensajes de la BD --}}
        <li class="nav-item">
            <a class="nav-link px-2"
               href="{{ route('admin.consultas.index') }}">
                Consultas
            </a>
        </li>
    @else
        {{-- Si es CLIENTE LOGUEADO: Va de forma segura al formulario de contacto público --}}
        <li class="nav-item">
            <a class="nav-link px-2"
               href="{{ url('/consulta') }}">
                Consultas
            </a>
        </li>
    @endif
@else
    {{-- Si es VISITANTE ANÓNIMO (No logueado): También va al formulario de contacto público --}}
    <li class="nav-item">
        <a class="nav-link px-2"
           href="{{ url('/consulta') }}">
            Consultas
        </a>
    </li>
@endauth

        @guest
            <li class="nav-item">
                <a class="nav-link px-2" href="{{ route('login') }}">Iniciar sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2" href="{{ route('registro.guardar') }}">Registrarse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2" href="{{ route('cliente.carrito') }}">🛒</a>
            </li>
        @endguest

        @auth
            @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
                <li class="nav-item">
                    <a class="nav-link px-2 fw-bold text-dark text-nowrap" href="{{ route('admin.dashboard') }}">
                        Panel Admin
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link px-2" href="{{ route('cliente.dashboard') }}">
                        Mi Cuenta
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 position-relative" href="{{ route('cliente.carrito') }}">
                        <span>🛒</span>
                        @if(session('carrito') && count(session('carrito')) > 0)
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger" style="font-size: 0.7rem; padding: 0.35em 0.5em;">
                                {{ count(session('carrito')) }}
                            </span>
                        @endif
                    </a>
                </li>
            @endif

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold px-2 text-nowrap"
                   href="#"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-expanded="false">
                    {{ auth()->user()->nombre ?? auth()->user()->name }}
                </a>

                <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm rounded-3">
                    <li><a class="dropdown-item py-2" href="{{ route('perfil') }}">👤 Mi Perfil</a></li>
                        @if(strtolower(trim(auth()->user()->rol->nombre)) === 'cliente')
                            <li><a class="dropdown-item py-2" href="{{ route('backend.usuarios.mis_compras') }}">🛍️ Mis Compras</a></li>
                        @endif
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger py-2">🚪 Cerrar sesión</button>
                        </form>
                    </li>
                </ul>
            </li>
        @endauth

    </ul>
</div>

    </div>
</nav>
