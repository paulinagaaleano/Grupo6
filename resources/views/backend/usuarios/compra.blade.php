@extends('plantilla')

@section('contenido')
<main class="py-5" style="background-color: #fcf8f8; min-height: 85vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                
                {{-- Card Contenedora Principal --}}
                <div class="card border-0 shadow-sm rounded-4 p-4" style="background-color: #ffffff; font-family: 'Montserrat', sans-serif;">
                    <h2 class="mb-4 text-center fw-light" style="color: #6c5b5b; letter-spacing: 1px;">
                        Finalizar Pedido
                    </h2>
                    
                    {{-- Formulario de Compra conectado a tu ruta confirmar --}}
                    <form method="POST" action="{{ route('carrito.confirmar') }}" id="form-checkout">
                        @csrf
                        
                        <div class="row g-4">
                            {{-- Columna Izquierda: Datos del Usuario (Lectura) --}}
                            <div class="col-md-6">
                                <div class="p-4 rounded-4 h-100" style="background-color: #fffaf9; border: 1px solid #f9eae6;">
                                    <h3 class="h5 mb-4" style="color: #6c5b5b; font-weight: 400;">Mis Datos</h3>
                                    
                                    <div class="mb-3 pb-2" style="border-bottom: 1px dashed #f3dcd4;">
                                        <span class="d-block small text-uppercase" style="color: #bc7d75; font-weight: 600;">Nombre completo</span>
                                        <span class="text-secondary">{{ auth()->user()->nombre }}</span>
                                    </div>
                                    
                                    <div class="mb-3 pb-2" style="border-bottom: 1px dashed #f3dcd4;">
                                        <span class="d-block small text-uppercase" style="color: #bc7d75; font-weight: 600;">Email de contacto</span>
                                        <span class="text-secondary">{{ auth()->user()->email }}</span>
                                    </div>

                                    <div class="mb-3 pb-2" style="border-bottom: 1px dashed #f3dcd4;">
                                        <span class="d-block small text-uppercase" style="color: #bc7d75; font-weight: 600;">Dirección de envíon</span>
                                        <input type="text" class="form-control form-control-sm rounded-pill border-light-subtle text-secondary" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                                    </div>

                                    <p class="small text-muted fst-italic mt-4 mb-0">
                                        * Los datos se toman de tu perfil. Si necesitás modificarlos, podés hacerlo desde tu panel de usuario.
                                    </p>

                                    
                                    
                                </div>
                            </div>

                            {{-- Columna Derecha: Método de Pago Dinámico --}}
                            <div class="col-md-6">
                                <div class="p-4 rounded-4" style="background-color: #fffaf9; border: 1px solid #f9eae6;">
                                    <h3 class="h5 mb-4" style="color: #6c5b5b; font-weight: 400;">Seleccionar Método de Pago</h3>
                                    
                                    {{-- Opción Tarjeta --}}
                                    <div class="form-check payment-box p-3 rounded-3 mb-3" style="border: 1px solid #f9eae6; background-color: #ffffff; cursor: pointer; transition: all 0.2s;">
                                        <input class="form-check-input ms-1" type="radio" name="metodo_pago" id="tarjeta" value="tarjeta" checked style="accent-color: #f1b3b3;">
                                        <label class="form-check-label ms-3 fw-medium" for="tarjeta" style="color: #8a7373;">
                                            Tarjeta de Crédito / Débito
                                        </label>
                                        
                                        {{-- Subformulario para Tarjeta --}}
                                        <div id="info-tarjeta" class="mt-3 pt-3 style-pago-inputs" style="border-top: 1px dashed #f3dcd4;">
                                            <div class="mb-2">
                                                <input type="text" class="form-control form-control-sm rounded-pill border-light-subtle text-secondary" placeholder="Nombre y Apellido del titular" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                                            </div>
                                            <div class="mb-2">
                                                <input type="text" class="form-control form-control-sm rounded-pill border-light-subtle text-secondary" placeholder="DNI del titular" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                                            </div>
                                            <div class="mb-2">
                                                <input type="text" class="form-control form-control-sm rounded-pill border-light-subtle text-secondary" placeholder="Número de Tarjeta" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                                            </div>
                                            <div class="row g-2">
                                                <div class="col-7">
                                                    <input type="text" class="form-control form-control-sm rounded-pill border-light-subtle text-secondary" placeholder="MM/AA" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                                                </div>
                                                <div class="col-5">
                                                    <input type="text" class="form-control form-control-sm rounded-pill border-light-subtle text-secondary" placeholder="CVV" style="font-size: 0.85rem; padding: 0.5rem 1rem;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Opción Transferencia --}}
                                    <div class="form-check payment-box p-3 rounded-3 mb-3" style="border: 1px solid #f9eae6; background-color: #ffffff; cursor: pointer; transition: all 0.2s;">
                                        <input class="form-check-input ms-1" type="radio" name="metodo_pago" id="transferencia" value="transferencia" style="accent-color: #f1b3b3;">
                                        <label class="form-check-label ms-3 fw-medium" for="transferencia" style="color: #8a7373;">
                                            Transferencia Bancaria (CBU/Alias)
                                        </label>
                                        
                                        {{-- Datos de CBU y Aviso --}}
                                        <div id="info-transferencia" class="mt-3 pt-3 text-secondary d-none" style="border-top: 1px dashed #f3dcd4; font-size: 0.85rem; line-height: 1.5;">
                                            <div class="p-3 rounded-3" style="background-color: #fff8f7; border: 1px solid #fae5e2; color: #7d6565;">
                                                <strong style="color: #bc7d75;">Nuestros Datos Bancarios:</strong><br>
                                                <span class="d-block mt-1"><strong>Alias:</strong> aura.beauty</span>
                                                <span><strong>CBU:</strong> 0000003100012345678901</span><br>
                                                <span class="d-block mt-2 text-dark fw-medium">⚠️ Importante:</span>
                                                Debes enviar el comprobante de transferencia a nuestro correo electrónico. Una vez recibido y verificado, procederemos con el envío de tu información y pedido.
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Opción Efectivo --}}
                                    <div class="form-check payment-box p-3 rounded-3 mb-0" style="border: 1px solid #f9eae6; background-color: #ffffff; cursor: pointer; transition: all 0.2s;">
                                        <input class="form-check-input ms-1" type="radio" name="metodo_pago" id="efectivo" value="efectivo" style="accent-color: #f1b3b3;">
                                        <label class="form-check-label ms-3 fw-medium" for="efectivo" style="color: #8a7373;">
                                            Efectivo al retirar
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Botones de Acción --}}
                        <div class="d-flex justify-content-between align-items-center mt-5 pt-3" style="border-top: 1px solid #f9eae6;">
                            <a href="{{ route('cliente.carrito') }}" class="btn rounded-pill px-4 py-2 text-uppercase" 
                               style="border: 1px solid #f1b3b3; color: #bc7d75; background-color: transparent; font-size: 0.85rem; font-weight: 600; letter-spacing: 0.5px; transition: all 0.3s; text-decoration: none;">
                                ← Volver al carrito
                            </a> 

                            <button type="submit" class="btn rounded-pill px-4 py-2 text-white text-uppercase" 
                                    style="background-color: #f1b3b3; border: none; font-size: 0.85rem; font-weight: 600; letter-spacing: 0.5px; box-shadow: 0 4px 12px rgba(241, 179, 179, 0.3); transition: all 0.3s;">
                                Confirmar Compra
                            </button> 
                        </div>

                    </form>
                </div> {{-- Fin Card --}}
                
            </div>
        </div>
    </div>
</main>

{{-- Lógica Interactiva (JS) y estilos --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const opcionTarjeta = document.getElementById("tarjeta");
        const opcionTransferencia = document.getElementById("transferencia");
        const opcionEfectivo = document.getElementById("efectivo");
        
        const bloqueTarjeta = document.getElementById("info-tarjeta");
        const bloqueTransferencia = document.getElementById("info-transferencia");
        const formulario = document.getElementById("form-checkout");

        // Listener para cambiar dinámicamente los paneles visibles
        document.querySelectorAll('input[name="metodo_pago"]').forEach(radio => {
            radio.addEventListener("change", function () {
                if (opcionTarjeta.checked) {
                    bloqueTarjeta.classList.remove("d-none");
                    bloqueTransferencia.classList.add("d-none");
                } else if (opcionTransferencia.checked) {
                    bloqueTransferencia.classList.remove("d-none");
                    bloqueTarjeta.classList.add("d-none");
                } else {
                    bloqueTarjeta.classList.add("d-none");
                    bloqueTransferencia.classList.add("d-none");
                }
            });
        });

        // Alerta nativa de éxito antes de procesar el submit al controlador
        formulario.addEventListener("submit", function (e) {
            alert("¡Compra realizada con éxito! Nos pondremos en contacto contigo.");
        });
    });
</script>

<style>
    .btn:hover {
        transform: translateY(-1px);
        filter: brightness(0.96);
    }
    a.btn:hover {
        background-color: #fff0f0 !important;
        color: #b36b61 !important;
    }
    .payment-box:hover {
        border-color: #f1b3b3 !important;
        background-color: #fffaf9 !important;
    }
    .form-control:focus {
        border-color: #f1b3b3 !important;
        box-shadow: 0 0 0 0.2rem rgba(241, 179, 179, 0.25) !important;
    }
</style>
@endsection