@extends('plantilla')

@section('contenido')

<div class="w-100 bg-white min-vh-100 pb-5">

    <div class="container pt-5 mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="m-0" style="font-size: 2rem; font-family: 'Playfair Display';">Panel de Administración</h2>
            <div class="d-flex align-items-center">
                <span class="badge px-3 py-2 me-3 rounded text-dark fw-bold" style="background-color: #f7c8d1; letter-spacing: 1px;">ADMIN</span>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-secondary btn-sm">Cerrar Sesión</button>
                </form>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

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
                <a href="{{ route('catalogo.todos') }}" class="text-decoration-none text-dark">
                    <div class="card h-100 indicator-card-bg shadow-sm rounded-3 hover-shadow transition">
                        <div class="card-body d-flex align-items-center p-4">
                            <div class="fs-2 text-dark me-4">
                                <i class="bi bi-sparkles"></i>
                            </div>
                            <div>
                                <p class="card-title mb-1 small text-muted">Productos</p>
                                <h3 class="m-0 fw-bold" style="font-size: 2rem;">{{ $totalProductos }}</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('backend.usuarios.mis_compras') }}" class="text-decoration-none text-dark">
                    <div class="card h-100 indicator-card-bg shadow-sm rounded-3 hover-shadow transition">
                        <div class="card-body d-flex align-items-center p-4">
                            <div class="fs-2 text-dark me-4">
                                <i class="bi bi-bag"></i>
                            </div>
                            <div>
                                <p class="card-title mb-1 small text-muted">Pedidos</p>
                                <h3 class="m-0 fw-bold" style="font-size: 2rem;">{{ $totalPedidos }}</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        {{-- TABLA DE USUARIOS CON ACCIÓN DE MODIFICAR ROL --}}
    <div class="card-header bg-dark text-white p-3 fw-bold d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
        <i class="bi bi-list-stars me-2"></i> 
        <span>REGISTRO DE USUARIOS</span>
    </div>
    
    <button type="button" class="btn btn-sm btn-light bg-white border-0 px-3 py-2 rounded-0 fw-bold text-uppercase shadow-sm mb-0" data-bs-toggle="modal" data-bs-target="#modalNuevoAdmin" style="font-size: 0.75rem; letter-spacing: 0.5px; color: #181114;">
        <i class="bi bi-person-plus-fill me-1"></i> Añadir Administrador
    </button>
    </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-5">
                    <thead class="table-light">
                        <tr style="font-family: 'Barlow', sans-serif; font-size: 0.85rem; letter-spacing: 1px;">
                            <th scope="col" class="ps-3" style="width: 50px;">#</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col" style="width: 280px;">ROL / ASIGNACIÓN</th>
                            <th scope="col" class="pe-3">REGISTRO</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 0.95rem;">
                        @foreach($usuarios as $usuario)
                        <tr>
                            <th scope="row" class="ps-3 text-muted">{{ $usuario->id }}</th>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="text-dark rounded-circle d-flex align-items-center justify-content-center me-2 fw-bold" style="width: 32px; height: 32px; font-size: 0.8rem; background-color: #f7c8d1; text-transform: uppercase;">
                                        {{ mb_strtoupper(mb_substr($usuario->nombre, 0, 2, 'UTF-8'), 'UTF-8') }}
                                    </div>
                                    <span class="text-capitalize">{{ $usuario->nombre }}</span>
                                </div>
                            </td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                                {{-- Formulario rápido en línea para cambiar el Rol --}}
                                <form action="{{ route('admin.usuarios.cambiarRol', $usuario->id) }}" method="POST" class="d-flex gap-2">
                                    @csrf
                                    @method('PATCH')
                                    <select name="rol_id" class="form-select form-select-sm rounded-0 py-1" style="font-size: 0.85rem;">
                                        <option value="1" {{ $usuario->rol_id == 1 ? 'selected' : '' }}>Admin</option>
                                        <option value="2" {{ $usuario->rol_id == 2 ? 'selected' : '' }}>Cliente</option>
                                    </select>
                                    
                                    {{-- Protegemos para que el admin logueado no se auto-quite el permiso por error --}}
                                    @if($usuario->id !== auth()->id())
                                        <button type="submit" class="btn btn-sm btn-outline-dark rounded-0 px-2" title="Guardar Rol">
                                            💾
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-sm btn-outline-secondary rounded-0 px-2" disabled title="Eres tú">
                                            👤
                                        </button>
                                    @endif
                                </form>
                            </td>
                            <td class="pe-3 text-muted">
                                {{ $usuario->created_at ? $usuario->created_at->format('d/m/Y') : '24/05/2026' }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        {{-- SECCIÓN DE ACCIONES MEJORADA CON ALTA DE ADMIN --}}
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-dark text-white p-3 fw-bold">
                <i class="bi bi-sliders me-2"></i> ACCIONES DISPONIBLES
            </div>
            <div class="card-body p-4 bg-light">
                <div class="d-flex flex-wrap gap-2">
                     <a href="/" class="btn btn-outline-secondary px-4 py-2 rounded-0 shadow-sm">
                        <i class="bi bi-arrow-left me-2"></i>Volver a la Tienda
                    </a>

                    <a href="{{ route('catalogo.todos') }}" class="btn btn-dark px-4 py-2 rounded-0 shadow-sm">
                        <i class="bi bi-folder-plus me-2"></i>Gestionar productos
                    </a>

                    <a href="{{ route('backend.usuarios.mis_compras') }}" class="btn btn-dark px-4 py-2 rounded-0 shadow-sm">
                        <i class="bi bi-bag-check me-2"></i>Gestionar ventas
                    </a>

                    <a href="{{ route('admin.consultas.index') }}" class="btn btn-dark px-4 py-2 rounded-0 shadow-sm">
                        <i class="bi bi-envelope me-2"></i>Gestionar consultas
                    </a>

                    
                   
                </div>
            </div>
        </div>

    </div>
</div>

{{-- VENTANA FLOTANTE (MODAL BOOTSTRAP) PARA CREAR NUEVOS ADMINS --}}
<div class="modal fade" id="modalNuevoAdmin" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3 border-0 shadow-lg">
            <div class="modal-header bg-dark text-white py-3">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">REGISTRAR NUEVO ADMINISTRADOR</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.usuarios.crearAdmin') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Nombre Completo</label>
                        <input type="text" name="nombre" class="form-control" required placeholder="Ej: Brenda Esquenazi">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Correo Electrónico</label>
                        <input type="email" name="email" class="form-control" required placeholder="admin@aurabeauty.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Contraseña de Acceso</label>
                        <input type="password" name="password" class="form-control" required minlength="6" placeholder="Mínimo 6 caracteres">
                    </div>
                    <div class="alert alert-warning py-2 small mb-0" style="font-size: 0.85rem;">
                        ⚠️ Al crear este usuario, se le asignarán automáticamente privilegios de gestión total sobre el sistema.
                    </div>
                </div>
                <div class="modal-footer bg-light p-3">
                    <button type="button" class="btn btn-secondary rounded-0 btn-sm px-3" data-bs-modal="dismiss" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-dark rounded-0 btn-sm px-4 fw-bold">CREAR USUARIO</button>
                </div>
            </form>
        </div>
    </div>
@endsection