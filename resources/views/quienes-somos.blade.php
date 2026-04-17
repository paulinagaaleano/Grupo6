<!DOCTYPE html>
<html lang="es">
@include('partes.head') 
<body>
 @include('partes.nav')

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 style="font-family: 'Playfair Display';">Nuestra Trayectoria</h2>
                <p class="mt-4">
                    Aura Beauty nació en 2025 con el propisito de acercar productos de calidad a todo el país. Nos especializamos en importar los mejores productos de Rare Beauty, seleccionando cada tono y textura pensando en nuestras bellas clientas.
                </p>
                
            </div>
        </div>
    </div>
</section>
<section class="container py-5">
    <h2 class="text-center mb-5" style="font-family: 'Playfair Display';">El Equipo Aura</h2>
    <div class="row">
        <div class="col-md-4 text-center mb-4">
            <div class="p-3">
                <img src="/img/staff1.jpg" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;" alt="hola">
                <h5 class="fw-bold">Esquenazi Brenda</h5>
                <p class="text-muted">Fundadora</p>
            </div>
        </div>
        
        <div class="col-md-4 text-center mb-4">
            <div class="p-3">
                <img src="/img/staff2.jpg" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;" alt="hola">
                <h5 class="fw-bold">Galeano Paulina</h5>
                <p class="text-muted">Fundadora</p>
</div>
    </div>
</section>


@include('partes.footer') 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


 </body>
</html>