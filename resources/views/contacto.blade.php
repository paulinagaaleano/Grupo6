@extends('plantilla')

@section('contenido')

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 style="font-family: 'Playfair Display', serif; font-weight: 700;" class="text-uppercase">¡Comunicate con nosotros desde donde estes!</h1>
        <p class="text-muted">En Aura Beauty, la belleza comienza con una conexión real.
             Si tienes dudas sobre nuestros servicios o productos, nuestro equipo está listo para asesorarte.</p>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- 🌟 LEEMOS LOS DATOS ACTUALES DE LA SESIÓN (o dejamos los de fábrica por defecto si está vacía) 🌟 --}}
    @php
        $datos = session('datos_contacto', [
            'email_publico'  => 'atencioncliente@aurabeauty.com',
            'email_reclamos' => 'reclamos@aurabeauty.com',
            'tel_publico'    => '3794207156',
            'tel_reclamos'   => '3794552912',
            'titulares'      => 'Esquenazi Brenda y Galeano Paulina.',
            'razon_social'   => 'Aura Beauty S.A.S.',
            'domicilio'      => 'Mendoza 2000, Corrientes, Argentina.'
        ]);
        
        $isAdmin = auth()->check() && strtolower(trim(auth()->user()->rol->nombre)) === 'admin';
    @endphp

    {{-- FORMULARIO GENERAL: Si es Admin, procesará los datos mediante POST al guardar --}}
    @if($isAdmin)
        <form action="{{ route('admin.contacto.update') }}" method="POST">
            @csrf
    @endif

    <div class="container my-5">
        <div class="row g-5">
            
            {{-- 📱 COLUMNA 1: CORREOS Y CELULARES --}}
            <div class="col-md-6">
                <h3 class="h4 mb-4">Correo y Números de contacto</h3>
                <div class="accordion" id="accordionEnvios">
                    
                    {{-- Bloque Email --}}
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#envio1">
                                <i class="bi bi-envelope me-2"></i> Email
                            </button>
                        </h2>
                        <div id="envio1" class="accordion-collapse collapse show" data-bs-parent="#accordionEnvios">
                            <div class="accordion-body">
                                @if($isAdmin)
                                    <div class="mb-2">
                                        <label class="small fw-bold text-muted">Atención al público:</label>
                                        <input type="text" name="email_publico" class="form-control form-control-sm" value="{{ $datos['email_publico'] }}">
                                    </div>
                                    <div>
                                        <label class="small fw-bold text-muted">Reclamos:</label>
                                        <input type="text" name="email_reclamos" class="form-control form-control-sm" value="{{ $datos['email_reclamos'] }}">
                                    </div>
                                @else
                                    <p class="mb-2"><strong>Atención al público:</strong> {{ $datos['email_publico'] }}</p>
                                    <p class="text-muted mb-0"><strong>Reclamos:</strong> {{ $datos['email_reclamos'] }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    {{-- Bloque Celulares --}}
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#envio2">
                                <i class="bi bi-phone me-2"></i> Celulares
                            </button>
                        </h2>
                        <div id="envio2" class="accordion-collapse collapse show" data-bs-parent="#accordionEnvios">
                            <div class="accordion-body">
                                @if($isAdmin)
                                    <div class="mb-2">
                                        <label class="small fw-bold text-muted">Atención al público:</label>
                                        <input type="text" name="tel_publico" class="form-control form-control-sm" value="{{ $datos['tel_publico'] }}">
                                    </div>
                                    <div>
                                        <label class="small fw-bold text-muted">Reclamos:</label>
                                        <input type="text" name="tel_reclamos" class="form-control form-control-sm" value="{{ $datos['tel_reclamos'] }}">
                                    </div>
                                @else
                                    <p class="mb-2"><strong>Atención al público:</strong> {{ $datos['tel_publico'] }}</p>
                                    <p class="text-muted mb-0"><strong>Reclamos:</strong> {{ $datos['tel_reclamos'] }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 🏢 COLUMNA 2: DATOS INSTITUCIONALES --}}
            <div class="col-md-6">
                <h3 class="h4 mb-4">Datos Institucionales</h3>
                <div class="p-4 bg-light rounded shadow-sm h-10">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-4">
                            <span class="badge bg-dark mb-2">Titulares</span>
                            @if($isAdmin)
                                <input type="text" name="titulares" class="form-control form-control-sm" value="{{ $datos['titulares'] }}">
                            @else
                                <p class="mb-0 ms-1">{{ $datos['titulares'] }}</p>
                            @endif
                        </li>
                        <li class="mb-4">
                            <span class="badge bg-dark mb-2">Razón Social</span>
                            @if($isAdmin)
                                <input type="text" name="razon_social" class="form-control form-control-sm" value="{{ $datos['razon_social'] }}">
                            @else
                                <p class="mb-0 ms-1">{{ $datos['razon_social'] }}</p>
                            @endif
                        </li>
                        <li class="mb-0">
                            <span class="badge bg-dark mb-2">Domicilio Legal</span>
                            @if($isAdmin)
                                <input type="text" name="domicilio" class="form-control form-control-sm" value="{{ $datos['domicilio'] }}">
                            @else
                                <p class="mb-0 ms-1">{{ $datos['domicilio'] }}</p>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- BOTÓN GUARDAR: Exclusivo de la interfaz del Admin --}}
        @if($isAdmin)
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-aura-dark btn-lg px-5 rounded-0 shadow-sm fw-bold" style="background-color: #181114; color: white;">
                        GUARDAR CAMBIOS
                    </button>
                </div>
            </div>
        </form>
        @endif

    </div>
</div>

@endsection