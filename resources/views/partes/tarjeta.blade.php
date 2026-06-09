<div class="card h-100 border-0 shadow-sm text-center">
    <div style="overflow: hidden; height: 250px;">
        <img src="{{ asset($producto->imagen) }}" class="w-100 h-100" style="object-fit: cover;" alt="{{ $producto->nombre }}">
    </div>

    <div class="card-body d-flex flex-column">
        <h4 class="fw-bold row-title" style="font-size: 1.1rem;">{{ $producto->nombre }}</h4>
        
        <p class="text-muted small">{{ $producto->descripcion }}</p>
        
        <p class="fw-bold text-dark mt-auto">${{ number_format($producto->precio, 0, ',', '.') }}</p>
        
        <form action="{{ route('carrito.agregar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="producto_id" value="{{ $producto->id }}">
    
                            <input type="hidden" name="cantidad" value="1">
    
                             <button type="submit" class="btn btn-sm w-10 rounded-0"> COMPRAR </button>
            </form>
    </div>
</div>