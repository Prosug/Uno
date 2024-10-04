<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAM-LP - Trámites y Servicios</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Incluir la barra de navegación -->
    <?php include 'navbar.php'; ?>

    <!-- Carrusel de imágenes -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="p_uno.png" class="d-block w-100" alt="Descripción de imagen 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>CIUDAD DE LA PAZ</h5>
                    <p>GAMPL</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="p_uno.png" class="d-block w-100" alt="Descripción de imagen 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>MEJORA DEL MEDIO AMBIENTE</h5>
                    <p>Proyectos de Sostenibilidad</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="p_uno.png" class="d-block w-100" alt="Descripción de imagen 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>TRÁMITES EN LÍNEA</h5>
                    <p>Facilita tu gestión</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="p_uno.png" class="d-block w-100" alt="Descripción de imagen 4">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ATENCIÓN AL CIUDADANO</h5>
                    <p>Estamos aquí para ayudarte</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Sección de información general -->
    <section class="info-section container mt-5 text-center">
        <h2 class="display-4">Información General de la HAM-LP</h2>
        <p class="lead">La Honorable Alcaldía Municipal de La Paz se encarga de gestionar y brindar servicios a la ciudadanía.</p>
        <p class="lead">La Gestión Ambiental de La Paz (GAMPL) se dedica a la protección del medio ambiente, promoviendo prácticas sostenibles y el uso responsable de los recursos naturales.</p>
    </section>

    <!-- Sección de tipos de trámites -->
    <section class="tramites-section container mt-5">
        <h2 class="text-center">Tipos de Trámites</h2>
        <div class="row">
            <!-- Trámite 1 -->
            <div class="col-md-4">
                <div class="tramite-card p-3 mb-4">
                    <h4>Trámite de Construcción</h4>
                    <p>Descripción: Este trámite es necesario para obtener el permiso de construcción en la ciudad.</p>
                    <p><strong>Requisitos:</strong> Presentar planos de la construcción, documentación de propiedad, y pago de tasas correspondientes.</p>
                </div>
            </div>
            <!-- Trámite 2 -->
            <div class="col-md-4">
                <div class="tramite-card p-3 mb-4">
                    <h4>Trámite de Propiedad</h4>
                    <p>Descripción: Este trámite es para registrar una propiedad a nombre del propietario.</p>
                    <p><strong>Requisitos:</strong> Cédula de identidad del propietario, documentos de compra, y pago de impuestos.</p>
                </div>
            </div>
            <!-- Trámite 3 -->
            <div class="col-md-4">
                <div class="tramite-card p-3 mb-4">
                    <h4>Trámite de Venta</h4>
                    <p>Descripción: Este trámite es necesario para formalizar la venta de una propiedad.</p>
                    <p><strong>Requisitos:</strong> Contrato de venta, identificación de ambas partes, y pago de tasas de registro.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Galería de Imágenes -->
    <section class="gallery-section container mt-5">
        <h2 class="text-center">FOTOS DE LA CIUDAD MARAVILLA</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="dos.jpg" class="img-fluid mb-3" alt="Descripción imagen 1">
            </div>
            <div class="col-md-4">
                <img src="uno.jpg" class="img-fluid mb-3" alt="Descripción imagen 2">
            </div>
            <div class="col-md-4">
                <img src="dos.jpg" class="img-fluid mb-3" alt="Descripción imagen 3">
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
