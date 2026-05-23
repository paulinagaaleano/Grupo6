@extends('plantilla') 

@section('contenido')

<main class="py-5" style="background-color">
    <div class="container">
        <div class="row g-4">

<div class="container mt-5">
    <h2 class="mb-4 text-center">{{ ucfirst($categoria) }}</h2>
    
    <div class="row">
        @foreach($productos as $producto)
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="p-3">
                        <img src="{{ asset($producto->imagen) }}" class="img-fluid" alt="{{ $producto->nombre }}">
                    </div>
                    <div class="card-body">
                        <h5 class="small fw-bold">{{ $producto->nombre }}</h5>
                        
                        @if($producto->descripcion !== '-')
                            <p class="small text-pink">{{ $producto->descripcion }}</p>
                        @endif
                        
                        <p class="text-pink fw-bold">${{ number_format($producto->precio, 0, ',', '.') }}</p>
                        
                        <a href="{{ url('/construccion') }}" class="btn btn-sm w-10 rounded-0"> COMPRAR </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</main>
@endsection