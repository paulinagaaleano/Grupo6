<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
</head>
<body>

@include('partes.nav')

<main class="py-5" style="background-color">
    <div class="container">
        <h1 class="text-center mb-2" style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 2px;">CORRECTORES</h1>
        <p class="text-center text-muted mb-5" style="font-family">Encontrá la cobertura perfecta para resaltar tu brillo natural</p>

        <div class="row g-4">
    
   <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector1.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Brighten & Fix Concealer</h5>
                <p class="text-pink fw-bold">$18.500</p>
                 <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector2.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Full Coverage Master</h5>
                <p class="text-pink fw-bold">$21.000</p>
            <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector3.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Hydra-Bright Eye Serum</h5>
                <p class="text-pink fw-bold">$23.400</p>
               <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector4.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Invisible Spot Cover</h5>
                <p class="text-pink fw-bold">$19.800</p>
                <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector5.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Ultra HD Light Wand</h5>
                <p class="text-pink fw-bold">$25.200</p>
               <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector6.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Creamy Matte Camouflage</h5>
                <p class="text-pink fw-bold">$17.900</p>
               <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector7.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Radiant Lift Concealer</h5>
                <p class="text-pink fw-bold">$22.100</p>
                <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector8.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Soft Focus Airbrush</h5>
                <p class="text-pink fw-bold">$20.600</p>
                <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-correctores/corrector9.webp') }}" class="img-fluid" alt="Corrector">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Zero Imperfection Stick</h5>
                <p class="text-pink fw-bold">$16.500</p>
                <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
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