@extends('plantilla')

@section('contenido')

<div class="container py-5" style="max-width: 600px; font-family: 'Montserrat', sans-serif;">
    
    {{-- Alerta flotante de éxito --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4 rounded-0 small text-center" role="alert">
            ✅ {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0 rounded-3 bg-white">
        <div class="card-header bg-dark text-white p-3 fw-bold text-center text-uppercase small" style="letter-spacing: 1px;">
            Formulario de contacto
        </div>
        <div class="card-body p-4">
            
            {{-- 1. Un solo formulario con la ruta correcta que procesará los datos --}}
            <form method="POST" action="{{ route('consultas.enviar') }}">
                @csrf {{-- 2. Clave de seguridad obligatoria --}}
                
                {{-- Campo Nombre --}}
                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted">Nombre Completo</label>
                    <input type="text" 
                           name="nombre" {{-- 3. IMPORTANTE: Atributo name agregado --}}
                           class="form-control rounded-0" 
                           placeholder="Ej: Ana García" 
                           required minlength="3">
                </div>

                {{-- Campo Email --}}
                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted">Correo Electrónico</label>
                    <input type="email" 
                           name="email" {{-- 3. IMPORTANTE: Atributo name agregado --}}
                           class="form-control rounded-0" 
                           placeholder="ana@ejemplo.com" 
                           required>
                </div>

                {{-- Campo Asunto (Nuevo, para que coincida con tu tabla de administración) --}}
                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted">Asunto de la Consulta</label>
                    <input type="text" 
                           name="asunto" 
                           class="form-control rounded-0" 
                           placeholder="Ej: Duda con mi pedido, Consulta de stock..." 
                           required minlength="4">
                </div>

                {{-- Campo Mensaje --}}
                <div class="mb-4">
                    <label class="form-label small fw-bold text-muted">Mensaje o Comentario</label>
                    <textarea name="mensaje" {{-- 3. IMPORTANTE: Atributo name agregado --}}
                              class="form-control rounded-0" 
                              rows="4" 
                              placeholder="Escribí acá tu consulta en detalle..." 
                              required minlength="10"></textarea>
                </div>

                {{-- Botón de envío elegante integrado en el mismo bloque --}}
                <div class="d-grid">
                    <button type="submit" class="btn btn-dark rounded-0 py-2 fw-bold text-uppercase shadow-sm" style="background-color: #181114; border-color: #181114; font-size: 0.75rem; letter-spacing: 0.5px;">
                        Enviar Mensaje
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection