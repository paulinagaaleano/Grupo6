<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

<nav class="navbar navbar-expand-lg navbar-light bg-white py-2 sticky-top border-bottom">
    <div class="container">
    
        <a class="navbar-brand fw-bold" href="/" style="letter-spacing: 3px; font-size: 2.1rem; font-style: italic; font-family: 'Playfair Display', serif !important;">
            AURA BEAUTY
        </a>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;1,400&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="font-size: 0.8rem;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-3 text-uppercase" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" style="font-size: 0.75rem; letter-spacing: 1px;">
                        Catálogo
                    </a>

                    <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('catalogo.labiales') }}">Labiales</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalogo.bases') }}">Bases Líquidas</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalogo.rubores') }}">Rubores</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalogo.correctores') }}">Correctores</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalogo.iluminadores') }}">Iluminadores</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalogo.rimmels') }}">Rimmel</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalogo.polvos') }}">Polvos Compactos</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/quienes-somos') }}">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/envios') }}">Comercialización</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/contacto') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
      </div>
</nav>