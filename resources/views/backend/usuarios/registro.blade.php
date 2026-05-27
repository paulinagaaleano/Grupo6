@extends('plantilla')

@section('contenido')

<div class="container mt-5">
    <h2 class="mb-4">Registrarse</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Hay errores en el formulario:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm" style="max-width: 500px;">
        <div class="card-body">
            <form action="{{ route('registro.guardar') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre y apellido</label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        class="form-control" 
                        value="{{ old('name') }}"
                        placeholder="Ingresá tu nombre"
                    >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        class="form-control" 
                        value="{{ old('email') }}"
                        placeholder="Ingresá tu correo"
                    >
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        class="form-control"
                        placeholder="Ingresá tu contraseña"
                    >
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        id="password_confirmation" 
                        class="form-control"
                        placeholder="Repetí tu contraseña"
                    >
                </div>

                <button type="submit" class="btn btn-primary">Registrarse</button>
        
            </form>

            <p class="mt-3 mb-0">
                ¿Ya tenés cuenta?
                <a href="{{ route('login') }}">Iniciar sesión</a>
            </p>
        </div>
    </div>
</div>

@endsection