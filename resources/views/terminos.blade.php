<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Términos y Usos - Aura Beauty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <style>
        .terms-content { font-family: 'Montserrat', sans-serif; line-height: 1.8; color: #444; }
        .terms-header { font-family: 'Playfair Display', serif; color: #333; margin-bottom: 2rem; }
        h4 { font-weight: 600; margin-top: 2rem; color: #000; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px; }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-light bg-white border-bottom py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">AURA BEAUTY</a>
            <a href="{{ url('/') }}" class="btn btn-outline-dark btn-sm">Volver al Inicio</a>
        </div>
    </nav>

    <div class="container my-5 shadow-sm bg-white p-5 rounded">
        <div class="row justify-content-center">
            <div class="col-md-10 terms-content">
                <h1 class="terms-header text-center">Términos y Condiciones de Uso</h1>
                <p class="text-muted text-center italic">Última actualización: Abril 2026</p>
                <hr class="my-5">

                <h4>1. Aceptación de los Términos</h4>
                <p>Al acceder y utilizar el sitio web de Aura Beauty, usted acepta estar sujeto a estos términos y condiciones. Si no está de acuerdo con alguna parte de estos términos, le rogamos que no utilice nuestro sitio.</p>

                <h4>2. Propiedad Intelectual</h4>
                <p>Todo el contenido presente en este sitio, incluyendo imágenes de productos (Rare Beauty), logotipos, textos y diseños, son propiedad de Aura Beauty o se utilizan bajo los permisos correspondientes. Queda prohibida su reproducción total o parcial sin autorización.</p>

                <h4>3. Políticas de Envío y Pagos</h4>
                <p>Aura Beauty ofrece envíos a todo el país. Los tiempos de entrega son estimativos y pueden variar según la ubicación. Los pagos se procesan de forma segura a través de nuestras plataformas habilitadas, incluyendo la opción de 3 cuotas sin interés en productos seleccionados.</p>

                <h4>4. Devoluciones</h4>
                <p>Por razones de higiene y tratándose de productos de cosmética, solo se aceptarán devoluciones de productos que presenten fallas de fabricación o daños durante el transporte, siempre que sean reportados dentro de las 48 horas de recibido el pedido.</p>

                <h4>5. Uso de Datos Personales</h4>
                <p>Su privacidad es importante para nosotros. Los datos recolectados en el formulario de contacto o durante la compra se utilizan exclusivamente para mejorar su experiencia y procesar sus pedidos.</p>

                <div class="text-center mt-5">
                    <p class="small text-muted">Si tienes dudas, contáctanos en soporte@aurabeauty.com</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-4 text-muted small">
        &copy; 2026 Aura Beauty. Todos los derechos reservados.
    </footer>

</body>
</html>