<!DOCTYPE html>
<html lang="es">
        @include('partes.head')
    <body>
         @include('partes.nav') 
    <div class="container mt-5">
<a href="#" class="btn btn-secondary mt-3">Contactar</a>
<div class="container mt-5">
<div class="card mt-4">
 <div class="card-body">
 <h2>Formulario de contacto</h2>
 <form>
 <div class="mb-3">
 <label class="form-label">Nombre</label>
 <input type="text" class="form-control" placeholder="Ingrese su
nombre">
 </div>
 <div class="mb-3">
 <label class="form-label">Email</label>
 <input type="email" class="form-control" placeholder="Ingrese su
email">
 </div>
 <div class="mb-3">
 <label class="form-label">Mensaje</label>
 <textarea class="form-control" rows="3"></textarea>
 </div>
 <button type="submit" class="btn btn-success">
 Enviar mensaje
 </button>
 </form>
 </div>
</div>
<div class="mb-3">

 @include('partes.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<body>
    </html>