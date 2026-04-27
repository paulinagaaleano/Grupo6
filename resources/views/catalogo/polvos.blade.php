<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
</head>
<body>

@include('partes.nav')

<main class="py-5" style="background-color">
    <div class="container">
        <h1 class="text-center mb-2" style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 2px;">POLVOS COMPACTOS</h1>
        <p class="text-center text-muted mb-5" style="font-family">Encontrá la cobertura perfecta para resaltar tu brillo natural</p>

        <div class="row g-4">
        <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-polvos/polvo1.webp') }}" class="img-fluid" alt="Polvos">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Matte Finish Pressed Powder</h5>
                <p class="text-pink fw-bold">$24.500</p>
                <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-polvos/polvo2.webp') }}" class="img-fluid" alt="Polvos">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Translucent Setting Powder</h5>
                <p class="text-pink fw-bold">$22.000</p>
                <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-polvos/polvo3.webp') }}" class="img-fluid" alt="Polvos">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Mineral Glow Dust</h5>
                <p class="text-pink fw-bold">$27.800</p>
                <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-polvos/polvo4.webp') }}" class="img-fluid" alt="Polvos">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Silk Blur Loose Powder</h5>
                <p class="text-pink fw-bold">$25.900</p>
                <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-polvos/polvo5.webp') }}" class="img-fluid" alt="Polvos">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">HD Studio Finishing Powder</h5>
                <p class="text-pink fw-bold">$29.000</p>
                <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-polvos/polvo6.webp') }}" class="img-fluid" alt="Polvos">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Velvet Touch Compact</h5>
                <p class="text-pink fw-bold">$21.500</p>
             <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-polvos/polvo7.webp') }}" class="img-fluid" alt="Polvos">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Banana Brighten Powder</h5>
                <p class="text-pink fw-bold">$23.200</p>
                 <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-polvos/polvo8.webp') }}" class="img-fluid" alt="Polvos">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Banana Brighten Powder</h5>
                <p class="text-pink fw-bold">$23.200</p>
                 <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-polvos/polvoBronzer.webp') }}" class="img-fluid" alt="Polvos">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Radiant Sun Bronzing Powder</h5>
                <p class="text-pink fw-bold">$20.400</p>
                 <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center">
            <div class="p-3">
                <img src="{{ asset('img/Prod-polvos/polvoBronzer2.webp') }}" class="img-fluid" alt="Polvos">
            </div>
            <div class="card-body">
                <h5 class="small fw-bold">Radiant Sun Bronzing Powder 2</h5>
                <p class="text-pink fw-bold">$26.100</p>
               <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
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