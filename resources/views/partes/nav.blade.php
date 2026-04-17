
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
    <li><a class="dropdown-item" href="{{ route('catalogo.show', 'bases') }}">Rubores</a></li>
    <li><a class="dropdown-item" href="{{ route('catalogo.show', 'correctores') }}">Correctores</a></li>
    <li><a class="dropdown-item" href="{{ route('catalogo.show', 'iluminadores') }}">Iluminadores</a></li>
    <li><a class="dropdown-item" href="{{ route('catalogo.show', 'rimmels') }}">Rimmel</a></li>
    <li><a class="dropdown-item" href="{{ route('catalogo.show', 'polvos') }}">Polvos Campactos</a></li>

</ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/quienes-somos') }}">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/envios') }}">Comercializacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/contacto') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </div>

    <a class="nav-link px-3 d-flex align-items-center" href="{{ url('/login') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-circle me-1" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
        Mi Cuenta
    </a>
</nav>