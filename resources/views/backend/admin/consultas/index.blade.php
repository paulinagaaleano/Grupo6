@extends('plantilla')

@section('contenido')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 style="font-family: 'Playfair Display';"> Consultas Recibidas </h2>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary btn-sm rounded-0">Volver al panel de administrador</a>
    </div>

    <div class="card border-0 shadow-sm rounded-3">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr style="font-size: 0.85rem; letter-spacing: 1px;">
                        <th>FECHA</th>
                        <th>REMITENTE</th>
                        <th>ASUNTO</th>
                        <th>MENSAJE</th>
                    </tr>
                </thead>
                <tbody style="font-size: 0.95rem;">
                    {{-- Recorremos el array de la sesión --}}
                    @foreach($consultas as $consulta)
                        <tr>
                            <td class="text-muted" style="width: 15%; font-size: 0.85rem;">
                                {{ $consulta['fecha'] }}
                            </td>
                            <td style="width: 25%;">
                                <strong>{{ e($consulta['nombre']) }}</strong><br>
                                <small class="text-muted">{{ e($consulta['email']) }}</small>
                            </td>
                            <td class="fw-bold" style="width: 20%;">
                                {{ e($consulta['asunto']) }}
                            </td>
                            <td class="text-secondary">
                                {{ e($consulta['mensaje']) }}
                            </td>
                        </tr>
                    @endforeach

                    @if(count($consultas) === 0)
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">No hay mensajes temporales en la sesión actual.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection