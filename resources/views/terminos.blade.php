@extends('plantilla')

@section('contenido')
    <div class="container my-5 shadow-sm bg-white p-4 p-md-5 rounded" style="font-family: 'Montserrat', sans-serif;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 terms-content">
                <h1 class="terms-header text-center fw-bold" style="font-family: 'Playfair Display';">Términos y Condiciones de Uso</h1>
                <p class="text-muted text-center fst-italic">Última actualización: Abril 2026</p>
                <hr class="my-4 my-md-5">

                {{-- 📝 Contenedor con alineación justificada y buen interlineado --}}
                <div class="lh-base text-secondary" style="text-align: justify;">
                    
                    <h4 class="text-dark fw-bold mt-4 h5">1. Aceptación de los Términos</h4>
                    <p>Al acceder y utilizar el sitio web de Aura Beauty, usted acepta estar sujeto a estos términos y condiciones. Si no está de acuerdo con alguna parte de estos términos, le rogamos que no utilice nuestro sitio. El uso continuo de la plataforma implica el consentimiento expreso de las normativas vigentes aquí descritas.</p>

                    <h4 class="text-dark fw-bold mt-4 h5">2. Propiedad Intelectual</h4>
                    <p>Todo el contenido presente en este sitio, incluyendo imágenes de productos (Rare Beauty), logotipos, textos, gráficos, iconos de botones y diseños, son propiedad de Aura Beauty o se utilizan bajo los permisos correspondientes. Queda prohibida su reproducción, copia, distribución, total o parcial sin la debida autorización previa por escrito.</p>

                    <h4 class="text-dark fw-bold mt-4 h5">3. Políticas de Envío y Pagos</h4>
                    <p>Aura Beauty ofrece envíos a todo el país mediante prestadores logísticos integrados. Los tiempos de entrega son estimativos y pueden variar según la ubicación geográfica del destinatario. Los pagos se procesan de forma cifrada y segura a través de nuestras plataformas habilitadas, incluyendo la opción de 3 cuotas sin interés en productos seleccionados.</p>

                    <h4 class="text-dark fw-bold mt-4 h5">4. Devoluciones</h4>
                    <p>Por razones de higiene y tratándose estrictamente de productos de cosmética y cuidado personal, solo se aceptarán devoluciones de productos que presenten fallas de fabricación demostrables o daños físicos sufridos durante el transporte, siempre que sean reportados formalmente dentro de las 48 horas de recibido el pedido.</p>

                    <h4 class="text-dark fw-bold mt-4 h5">5. Uso de Datos Personales</h4>
                    <p>Su privacidad es una prioridad absoluta para nosotros. Los datos recolectados en el formulario de contacto o durante el proceso de compra se utilizan exclusivamente con la finalidad de mejorar su experiencia operativa, gestionar el envío de paquetes y procesar sus pedidos de manera transparente.</p>

                </div>

                <div class="text-center mt-5 pt-3 border-top">
                    <p class="text-muted" style="font-size: 0.9rem;">Si tienes dudas o necesitas asistencia legal, contáctanos en <strong class="text-dark">soporte@aurabeauty.com</strong></p>
                </div>
            </div>
        </div>
    </div>
@endsection