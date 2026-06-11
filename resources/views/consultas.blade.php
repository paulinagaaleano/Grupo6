@extends('plantilla')

@section('contenido')

<div class="container mt-5">
    <div class="card mt-4">
        <div class="card-body">
            <h2>Formulario de contacto</h2>
            
            {{-- Usamos el action para ir a la página de construcción --}}
            <form action="{{ url('/construccion') }}" method="GET" id="miFormulario">
                
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="Ingrese su nombre" required minlength="3">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Ingrese su email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mensaje</label>
                    <textarea class="form-control" rows="3" required minlength="10"></textarea>
                </div>

                <form action="{{ route('consultas.store') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">Enviar Mensaje</button>
                </form>

            </form>
        </div>
    </div>
</div>

@endsection