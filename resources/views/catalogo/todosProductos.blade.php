<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
</head>
<body>

@include('partes.nav')

<main class="py-5" style="background-color">
    <div class="container">
        <h1 class="text-center mb-2" style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 2px;">DESCUBRI TODOS NUESTROS PRODUCTOS</h1>
        <p class="text-center text-muted mb-5" style="font-family">Encontrá tu maquillaje ideal</p>

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

                <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-bases/base1.webp') }}" class="img-fluid" alt="Base Líquida">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Liquid Touch Foundation</h5>
                        <p class="text-pink fw-bold">$32.000</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
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
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
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
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
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
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
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
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
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
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
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
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
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
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
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
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

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

    <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador9.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Lunar Reflection Beam</h5>
                        <p class="text-pink fw-bold">$22.500</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador5.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Sunstruck Bronze Glow</h5>
                        <p class="text-pink fw-bold">$20.800</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador6.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Golden Hour Aura</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador7.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Golden Hour Cute</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador8.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Golden Hour Nice</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador3.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Golden Hour Pop</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador10.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Golden Hour Lucky</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>


            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador12.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Golden Hour Rise</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador13.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Golden Hour Belong</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Iluminador/iluminador14.webp') }}" class="img-fluid" alt="Iluminador">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Golden Hour Shine</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

                        <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3"><img src="{{ asset('img/Prod-Labiales/lab6.webp') }}" class="img-fluid" alt="Labial"></div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Dewy Dream Balm</h5>
                        <p class="text-pink fw-bold">$22.000</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3"><img src="{{ asset('img/Prod-Labiales/lab8.webp') }}" class="img-fluid" alt="Labial"></div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Glossy Hope</h5>
                        <p class="text-pink fw-bold">$24.300</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>


            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3"><img src="{{ asset('img/Prod-Labiales/lab10.webp') }}" class="img-fluid" alt="Labial"></div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Stay Vulnerable Red</h5>
                        <p class="text-pink fw-bold">$23.500</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3"><img src="{{ asset('img/Prod-Labiales/lab11.webp') }}" class="img-fluid" alt="Labial"></div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Matte Fearless</h5>
                        <p class="text-pink fw-bold">$28.900</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3"><img src="{{ asset('img/Prod-Labiales/lab5.webp') }}" class="img-fluid" alt="Labial"></div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Soft Pinch Rose</h5>
                        <p class="text-pink fw-bold">$25.500</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3"><img src="{{ asset('img/Prod-Labiales/lab12.webp') }}" class="img-fluid" alt="Labial"></div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Sugar Glaze</h5>
                        <p class="text-pink fw-bold">$21.000</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3"><img src="{{ asset('img/Prod-Labiales/lab13.webp') }}" class="img-fluid" alt="Labial"></div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Brave Berry</h5>
                        <p class="text-pink fw-bold">$26.400</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3"><img src="{{ asset('img/Prod-Labiales/lab14.webp') }}" class="img-fluid" alt="Labial"></div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Sweet Nude</h5>
                        <p class="text-pink fw-bold">$22.000</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3"><img src="{{ asset('img/Prod-Labiales/lab15.webp') }}" class="img-fluid" alt="Labial"></div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Deep Joy Matte</h5>
                        <p class="text-pink fw-bold">$29.000</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3"><img src="{{ asset('img/Prod-Labiales/lab16.webp') }}" class="img-fluid" alt="Labial"></div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Pure Shine Oil</h5>
                        <p class="text-pink fw-bold">$24.000</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3"><img src="{{ asset('img/Prod-Labiales/lab17.webp') }}" class="img-fluid" alt="Labial"></div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Love Energy</h5>
                        <p class="text-pink fw-bold">$25.500</p>
                       <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>
            
<div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/img/Prod-Rubores/rubor1.webp') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Soft Pinch Joy</h5>
                        <p class="text-pink fw-bold">$19.500</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/img/Prod-Rubores/rubor2.webp') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Soft Pinch Happy</h5>
                        <p class="text-pink fw-bold">$19.500</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>


            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/img/Prod-Rubores/rubor6.webp') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Lucky Pink Glow</h5>
                        <p class="text-pink fw-bold">$18.900</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/img/Prod-Rubores/rubor7.webp') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Graceful Mauve Blush</h5>
                        <p class="text-pink fw-bold">$20.200</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>


            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/img/Prod-Rubores/rubor8.webp') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Encourage Soft Pink</h5>
                        <p class="text-pink fw-bold">$19.500</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/img/Prod-Rubores/rubor9.webp') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Worth True Red</h5>
                        <p class="text-pink fw-bold">$21.500</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/img/Prod-Rubores/rubor10.webp') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Virtue Peachy Glow</h5>
                        <p class="text-pink fw-bold">$18.700</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/img/Prod-Rubores/rubor11.webp') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Luminous Spirit</h5>
                        <p class="text-pink fw-bold">$23.000</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/img/Prod-Rubores/rubor12.webp') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Sweet Aura Coral</h5>
                        <p class="text-pink fw-bold">$19.800</p>
                         <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/img/Prod-Rubores/rubor13.webp') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Cherish Dewy Pink</h5>
                        <p class="text-pink fw-bold">$20.500</p>
                        <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('img/Prod-Rubores/rubor15.webp') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Aura Signature Rose</h5>
                        <p class="text-pink fw-bold">$25.000</p>
                       <a href="{{ url('/construccion') }}" class="btn btn-dark btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset('/img/Prod-Rubores/rubor.webp') }}" class="img-fluid" alt="Rubor">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">Soft Pinch Bliss</h5>
                        <p class="text-pink fw-bold">$19.500</p>
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