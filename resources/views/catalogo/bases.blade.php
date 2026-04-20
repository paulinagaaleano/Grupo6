<!DOCTYPE html>
<html lang="es">
@include('partes.head') 
<body>

@include('partes.nav')

<main class="py-5" style="background-color: #fdfdfd;">
    <div class="container">
        <h1 class="text-center mb-2" style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 2px;">BASES LÍQUIDAS</h1>
        <p class="text-center text-muted mb-5" style="font-family: 'Montserrat';">Encontrá la cobertura perfecta para resaltar tu brillo natural</p>

        <div class="row g-4">
            
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base1.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Liquid Touch Foundation</h5>
                        <p class="text-pink fw-bold">$32.000</p>
                        <button class="btn btn-dark btn-sm w-100 rounded-0">COMPRAR</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base2.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Always An Optimist Tint</h5>
                        <p class="text-pink fw-bold">$29.500</p>
                        <button class="btn btn-dark btn-sm w-100 rounded-0">COMPRAR</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base3.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Silk Glow Foundation</h5>
                        <p class="text-pink fw-bold">$35.000</p>
                        <button class="btn btn-dark btn-sm w-100 rounded-0">COMPRAR</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base4.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Natural Light Tinted</h5>
                        <p class="text-pink fw-bold">$27.800</p>
                        <button class="btn btn-dark btn-sm w-100 rounded-0">COMPRAR</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base5.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Radiant Aura Base</h5>
                        <p class="text-pink fw-bold">$31.200</p>
                        <button class="btn btn-dark btn-sm w-100 rounded-0">COMPRAR</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base6.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Skin Fresh Finish</h5>
                        <p class="text-pink fw-bold">$30.500</p>
                        <button class="btn btn-dark btn-sm w-100 rounded-0">COMPRAR</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base7.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Matte Cloud Dream</h5>
                        <p class="text-pink fw-bold">$33.400</p>
                        <button class="btn btn-dark btn-sm w-100 rounded-0">COMPRAR</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base8.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Velvet Smooth Tint</h5>
                        <p class="text-pink fw-bold">$28.000</p>
                        <button class="btn btn-dark btn-sm w-100 rounded-0">COMPRAR</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base9.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Daily Glow Serum Base</h5>
                        <p class="text-pink fw-bold">$26.900</p>
                        <button class="btn btn-dark btn-sm w-100 rounded-0">COMPRAR</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

@include('partes.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>