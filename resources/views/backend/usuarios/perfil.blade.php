@extends('plantilla')

@section('contenido')

<div class="container py-5" style="max-width: 600px;">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header bg-dark text-white p-3 fw-bold">
            CONFIGURACIÓN DE MI PERFIL
        </div>
        <div class="card-body p-4">

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger mb-4">
                    <ul class="mb-0 small">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('perfil.actualizar') }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted">Nombre Completo</label>
                    <input type="text" name="nombre" class="form-control rounded-0" value="{{ old('nombre', auth()->user()->nombre) }}" required>
                </div>

                <div class="mb-4">
                    <label class="form-label small fw-bold text-muted">Correo Electrónico</label>
                    <input type="email" name="email" class="form-control rounded-0" value="{{ old('email', auth()->user()->email) }}" required>
                </div>

                <hr class="text-muted my-4">
                <h6 class="fw-bold mb-3" style="letter-spacing: 0.5px;"> MODIFICAR CONTRASEÑA (OPCIONAL)</h6>

                <div class="mb-3">
                    <label class="form-label small text-muted">Nueva Contraseña</label>
                    <input type="password" name="password" class="form-control rounded-0" placeholder="Dejar en blanco para no modificar">
                </div>

                <div class="mb-4">
                    <label class="form-label small text-muted">Confirmar Nueva Contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control rounded-0" placeholder="Repetir nueva contraseña">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-dark rounded-0 px-4 py-2 btn-sm fw-bold text-uppercase shadow-sm" style="background-color: #181114; border-color: #181114; font-size: 0.75rem; letter-spacing: 0.5px;">
                        Guardar cambios
                    </button>
                    <a href="/" class="btn btn-outline-secondary btn-sm rounded-0 px-3 py-2">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection