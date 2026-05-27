@extends('plantilla')

@section('contenido')

<div class="w-100 bg-white min-vh-100 pb-5">
    
    <div class="hero-banner shadow-sm mb-5">
        <div class="container">
            <h1 style="font-family: 'Playfair Display'; font-size: 3rem;"> Tienda de Cosméticos Aura Beauty</h1>
            <p class="m-0 text-muted" style="letter-spacing: 2px; font-style: italic;">
                La esencia de la belleza al mejor precio
            </p>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="m-0" style="font-size: 2rem;">Panel de Administración</h2>
            <div class="d-flex align-items-center">
                <span class="badge px-3 py-2 me-3 rounded text-dark fw-bold" style="background-color: #f7c8d1; letter-spacing: 1px;">ADMIN</span>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-secondary btn-sm">Cerrar Sesión</button>
                </form>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card h-100 indicator-card-bg shadow-sm rounded-3">
                    <div class="card-body d-flex align-items-center p-4">
                        <div class="fs-2 text-dark me-4">
                            <i class="bi bi-people"></i>
                        </div>
                        <div>
                            <p class="card-title mb-1 small text-muted">Usuarios registrados</p>
                            <h3 class="m-0 fw-bold" style="font-size: 2rem;">{{ $usuarios->count() }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 indicator-card-bg shadow-sm rounded-3">
                    <div class="card-body d-flex align-items-center p-4">
                        <div class="fs-2 text-dark me-4">
                            <i class="bi bi-sparkles"></i>
                        </div>
                        <div>
                            <p class="card-title mb-1 small text-muted">Productos</p>
                            <h3 class="m-0 fw-bold" style="font-size: 2rem;">0</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 indicator-card-bg shadow-sm rounded-3">
                    <div class="card-body d-flex align-items-center p-4">
                        <div class="fs-2 text-dark me-4">
                            <i class="bi bi-bag"></i>
                        </div>
                        <div>
                            <p class="card-title mb-1 small text-muted">Pedidos</p>
                            <h3 class="m-0 fw-bold" style="font-size: 2rem;">0</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-3 mb-5">
            <div class="card-header dark-header p-3 fw-bold d-flex align-items-center">
                <i class="bi bi-list-stars me-2"></i> REGISTRO DE USUARIOS
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr style="font-family: 'Barlow', sans-serif; font-size: 0.85rem; letter-spacing: 1px;">
                            <th scope="col" class="ps-3" style="width: 50px;">#</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ROL</th>
                            <th scope="col" class="pe-3">REGISTRO</th>
                        </tr>
                   </thead>
                    <tbody style="font-size: 0.95rem;">
                        @foreach($usuarios as $users)
                        <tr>
                            <th scope="row" class="ps-3 text-muted">{{ $users->id }}</th>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="text-dark rounded-circle d-flex align-items-center justify-content-center me-2 fw-bold" style="width: 32px; height: 32px; font-size: 0.8rem; background-color: #f7c8d1; text-transform: uppercase;">
                                        {{ strtoupper(substr($users->name, 0, 2)) }}
                                    </div>
                                    <span class="text-capitalize">{{ $users->name }}</span>
                                </div>
                            </td>
                            <td>{{ $users->email }}</td>
                            <td>
                              
    {{-- 🌟 Usamos strtolower y trim para ignorar mayúsculas y espacios fantasmas --}}
    @if(strtolower(trim($users->role)) === 'admin' || strtolower(trim($users->rol)) === 'admin')
        <span class="badge px-2 py-1 text-white" style="background-color: #181114;">Admin</span>
    @else
        <span class="badge px-2 py-1 text-dark" style="background-color: #eae2e2;">Cliente</span>
    @endif

                            </td>
                            <td class="pe-3 text-muted">
                                {{ $users->created_at ? $users->created_at->format('d/m/Y') : '24/05/2026' }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header dark-header p-3 fw-bold">
                <i class="bi bi-sliders me-2"></i> ACCIONES DISPONIBLES
            </div>
            <div class="card-body p-4 bg-light">
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-aura-dark px-4 py-2 shadow-sm">
                        <i class="bi bi-folder-plus me-2"></i>Gestionar productos
                    </a>
                    <a href="/" class="btn btn-outline-secondary px-4 py-2 shadow-sm">
                        <i class="bi bi-arrow-left me-2"></i>Volver a la Tienda
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection