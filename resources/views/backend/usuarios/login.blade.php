@extends('plantilla')

@section('contenido')
<div class="container mt-5">
    <h2 class="mb-4">Iniciar Sesión</h2>

    <div class="card shadow-sm" style="max-width: 500px;">
        <div class="card-body">
 @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
@endif
         <form action="{{ route('login.guardar') }}" method="POST">
    
    @csrf 

    <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email') }}">
        
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-dark w-100">Iniciar Sesión</button>
</form>

            <p class="mt-3 mb-0">
                ¿No tienes cuenta todavía? <a href="{{ route('registro') }}">Regístrate acá</a>
            </p>
        </div>
    </div>
</div>
@endsection