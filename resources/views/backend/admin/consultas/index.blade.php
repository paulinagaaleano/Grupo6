@extends('plantilla')

@section('contenido')
<div class="container py-5" style="max-width: 900px;">
    <h2 class="mb-4" style="font-family: 'Playfair Display'; font-weight: 700;">
        📬 Bandeja de Consultas y Mensajes
    </h2>

    @if(session('success'))
        <div class="alert alert-success rounded-0 small mb-4">{{ session('success') }}</div>
    @endif

    <div class="row g-3">
        @forelse($consultas as $consulta)
            <div class="col-12">
                {{-- Si no está leída, le ponemos un borde izquierdo sutil para resaltarla --}}
                <div class="card border-0 shadow-sm rounded-3 bg-white p-3 @if(!$consulta->leida) border-start border-dark border-3 @endif">
                    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 border-bottom pb-2 mb-2">
                        <div>
                            <strong class="text-dark">{{ $consulta->nombre }}</strong> 
                            <span class="text-muted small">({{ $consulta->email }})</span>
                        </div>
                        <small class="text-muted">{{ $consulta->created_at->format('d/m/Y H:i') }}</small>
                    </div>
                    
                    <p class="text-secondary mb-3 small lh-base" style="text-align: justify;">
                        {{ $consulta->mensaje }}
                    </p>

                    <div class="d-flex justify-content-end align-items-center">
                        @if($consulta->leida)
                            <span class="badge bg-light text-success border border-success px-3 py-1 rounded-0 small" style="font-size: 0.7rem; letter-spacing: 0.5px;">
                                <i class="bi bi-check2-all me-1"></i> LEÍDO
                            </span>
                        @else
                            {{-- 🌟 Formulario instantáneo para marcar como leído 🌟 --}}
                            <form method="POST" action="{{ route('admin.consultas.leer', $consulta->id) }}" class="m-0">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-sm btn-dark rounded-0 px-3 fw-bold text-uppercase" style="background-color: #181114; font-size: 0.65rem; letter-spacing: 0.5px;">
                                    Marcar como leído
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5 bg-white shadow-sm rounded">
                <p class="text-muted mb-0">No hay mensajes ni consultas registradas en la bandeja.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection