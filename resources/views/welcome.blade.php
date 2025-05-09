<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseñas de Videojuegos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Personalizado -->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Portada de Inicio -->
    <div class="hero-section text-center text-white d-flex align-items-center">
        <div class="container">
            <h1 class="display-3 fw-bold">Bienvenido a Reseñas de Videojuegos</h1>
            <p class="lead mb-4">Descubre los mejores videojuegos, lee reseñas y comparte tus experiencias.</p>
            <a href="{{ route('videojuegos.populares') }}" class="btn btn-primary btn-lg">Explorar Videojuegos Populares</a>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Reseñas de Videojuegos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('videojuegos.populares') }}">Videojuegos Populares</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reseñas.index') }}">Reseñas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Sección de Introducción -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <h3>Lee Reseñas</h3>
                    <p>Explora opiniones detalladas de otros jugadores sobre tus videojuegos favoritos.</p>
                </div>
                <div class="col-md-4">
                    <h3>Escribe tu Opinión</h3>
                    <p>Comparte tus experiencias y califica los videojuegos que has jugado.</p>
                </div>
                <div class="col-md-4">
                    <h3>Descubre Nuevos Juegos</h3>
                    <p>Encuentra los títulos más populares y nuevos lanzamientos.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap JS (para componentes interactivos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>