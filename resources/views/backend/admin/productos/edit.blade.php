@extends('plantilla')

@section('contenido')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-header bg-dark text-white p-3 fw-bold">
                    EDITAR PRODUCTO: {{ $producto->nombre }}
                </div>
                <div class="card-body p-4">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                        @csrf
                        @method('PUT') {{--CRÍTICO: Indica a Laravel que es una edición --}}

                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre del Producto</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}" required>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="categoria_id" class="form-label fw-bold">Categoría</label>
                                <select class="form-select" id="categoria_id" name="categoria_id" required>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>
                                            {{ $categoria->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label fw-bold">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ old('descripcion', $producto->descripcion) }}</textarea>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="precio" class="form-label fw-bold">Precio ($)</label>
                                <input type="number" class="form-control" id="precio" name="precio" value="{{ old('precio', $producto->precio) }}" min="0" required>
                            </div>
                            <div class="col-md-6">
                                <label for="stock" class="form-label fw-bold">Stock Disponible</label>
                                <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', $producto->stock) }}" min="0" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="imagen" class="form-label fw-bold">Ruta de la Imagen</label>
                            <input type="text" class="form-control" id="imagen" name="imagen" value="{{ old('imagen', $producto->imagen) }}" required>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-dark px-4 rounded-0">GUARDAR CAMBIOS</button>
                            <a href="{{ route('catalogo.todos') }}" class="btn btn-outline-secondary px-4 rounded-0">Cancelar</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection