@extends('plantilla')

@section('contenido')

<div class="container py-5">
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4">

            <h2 class="mb-4">
                👤 Mi Perfil
            </h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('perfil.actualizar') }}">
                @csrf

                <div class="mb-3">
                    <label>Nombre</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ auth()->user()->name }}">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ auth()->user()->email }}">
                </div>

                <button type="submit" class="btn btn-primary">
                    Guardar cambios
                </button>
            </form>

        </div>
    </div>
</div>

@endsection