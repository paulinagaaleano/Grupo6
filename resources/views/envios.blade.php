<!DOCTYPE html>
<html lang="es">
@include('partes.head') 
<body>
    @include('partes.nav') 
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 style="font-family: 'Playfair Display', serif; font-weight: 700;" class="text-uppercase">Comercialización</h1>
        <p class="text-muted">Todo lo que necesitas saber para recibir tus productos favoritos</p>
        <hr class="mx-auto" style="width: 50px; border: 2px solid #f8c3d5;">
    </div>

    <div class="row g-5">
        <div class="col-md-6">
            <h3 class="h4 mb-4"><i class="bi bi-truck me-2"></i> Envíos y Entregas</h3>
            <div class="accordion" id="accordionEnvios">
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#envio1">
                            Envíos a todo el País
                        </button>
                    </h2>
                    <div id="envio1" class="accordion-collapse collapse" data-bs-parent="#accordionEnvios">
                        <div class="accordion-body">
                            Trabajamos con <strong>Correo Argentino</strong> y <strong>Andreani</strong> para llegar a cada rincón del país. Los envíos a sucursal son más económicos y los envíos a domicilio ofrecen mayor comodidad.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#envio2">
                            Entrega Express (CABA y GBA)
                        </button>
                    </h2>
                    <div id="envio2" class="accordion-collapse collapse" data-bs-parent="#accordionEnvios">
                        <div class="accordion-body">
                            Si compras antes de las 12:00 hs, recibís tu pedido el mismo día mediante nuestra motomensajería privada de confianza.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h3 class="h4 mb-4"><i class="bi bi-credit-card me-2"></i> Medios de Pago</h3>
            <div class="p-4 bg-light rounded shadow-sm">
                <ul class="list-unstyled mb-0">
                    <li class="mb-3 d-flex align-items-center">
                        <span class="badge bg-dark me-2">3 Cuotas</span> Sin interés con tarjetas de crédito bancarias.
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="badge bg-dark me-2">10% OFF</span> Pagando mediante transferencia bancaria.
                    </li>
                    <li class="mb-0 d-flex align-items-center">
                        <span class="badge bg-dark me-2">Efectivo</span> Únicamente para retiros en nuestro Showroom.
                    </li>
                </ul>
                <div class="mt-4">
                    <img src="https://img.icons8.com/color/48/000000/visa.png" alt="Visa"/>
                    <img src="https://img.icons8.com/color/48/000000/mastercard.png" alt="Mastercard"/>
                    <img src="https://img.icons8.com/color/48/000000/mercado-pago.png" alt="Mercado Pago"/>
                </div>
            </div>
        </div>
    </div>

    @include('partes.footer') 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>