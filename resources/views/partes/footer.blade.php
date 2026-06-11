<footer class="bg-white py-5 border-top mt-5" style="font-family: 'Montserrat', sans-serif;">
    <div class="container">
        <div class="row">

            {{-- Columna 1: Marca --}}
            <div class="col-12 col-md-4 mb-4 text-center text-md-start">
                <h5 class="fw-bold text-dark" style="font-family: 'Playfair Display'; letter-spacing: 1px;">AURA BEAUTY</h5>
                <p class="text-muted" style="font-size: 0.95rem; line-height: 1.6;">Realzando tu belleza natural con Rare Beauty.</p>
            </div>

            {{-- Columna 2: Navegación --}}
            <div class="col-12 col-sm-6 col-md-4 mb-4 text-center text-md-start">
                <h6 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 0.85rem; letter-spacing: 1px;">Navegación</h6>
                <ul class="list-unstyled lh-lg">
                    <li><a href="{{ url('/') }}" class="text-decoration-none text-muted" style="font-size: 0.95rem;">Inicio</a></li>
                    <li><a href="{{ url('/catalogo') }}" class="text-decoration-none text-muted" style="font-size: 0.95rem;">Catálogo</a></li>
                    
                    @auth
                        @if(strtolower(trim(auth()->user()->rol->nombre)) === 'admin')
                            <li><a href="{{ route('admin.consultas.index') }}" class="text-decoration-none text-muted" style="font-size: 0.95rem;">Consultas</a></li>
                        @else
                            <li><a href="{{ url('/consultas') }}" class="text-decoration-none text-muted" style="font-size: 0.95rem;">Consultas</a></li>
                        @endif
                    @else
                        <li><a href="{{ url('/consultas') }}" class="text-decoration-none text-muted" style="font-size: 0.95rem;">Consultas</a></li>
                    @endauth
                </ul>
            </div>

            {{-- Columna 3: Información --}}
            <div class="col-12 col-sm-6 col-md-4 mb-4 text-center text-md-start">
                <h6 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 0.85rem; letter-spacing: 1px;">Información</h6>
                <ul class="list-unstyled lh-lg">
                    <li><a href="{{ url('/quienes-somos') }}" class="text-decoration-none text-muted" style="font-size: 0.95rem;">Quiénes Somos</a></li>
                    <li><a href="{{ url('/comercializacion') }}" class="text-decoration-none text-muted" style="font-size: 0.95rem;">Comercialización</a></li>
                    <li><a href="{{ url('/contacto') }}" class="text-decoration-none text-muted" style="font-size: 0.95rem;">Contacto</a></li>
                    <li><a href="{{ url('/terminos') }}" class="text-decoration-none text-muted" style="font-size: 0.95rem;">Términos y Usos</a></li>
                </ul>
            </div>

        </div>

        <hr class="my-4 text-muted">

        <div class="text-center">
            <p class="text-muted mb-0" style="font-size: 0.9rem;">
                &copy; 2026 Aura Beauty. Todos los derechos reservados.
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</footer>