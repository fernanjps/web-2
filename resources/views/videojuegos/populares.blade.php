<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Videojuegos Populares</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .videojuego-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            display: flex;
            align-items: center;
        }
        .videojuego-card img {
            width: 150px;
            height: auto;
            border-radius: 5px;
            margin-right: 20px;
        }
        .videojuego-info h2 {
            margin: 0 0 10px;
            color: #2c3e50;
        }
        .videojuego-info p {
            margin: 5px 0;
            color: #555;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Videojuegos Populares</h1>
    <div class="row">
        @forelse ($videojuegos as $videojuego)
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            @if ($videojuego->ruta_imagen_portada)
                                <img src="{{ asset($videojuego->ruta_imagen_portada) }}" class="img-fluid rounded-start" alt="{{ $videojuego->titulo }}">
                            @else
                                <img src="{{ asset('images/placeholder.jpg') }}" class="img-fluid rounded-start" alt="Sin imagen">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $videojuego->titulo }}</h5>
                                <p class="card-text"><strong>Plataforma:</strong> {{ $videojuego->plataforma->nombre_plataforma }}</p>
                                <p class="card-text"><strong>Género:</strong> {{ $videojuego->genero->nombre_genero }}</p>
                                <p class="card-text"><strong>Desarrollador:</strong> {{ $videojuego->desarrollador->nombre_desarrollador }}</p>
                                <p class="card-text"><strong>Clasificación:</strong> {{ $videojuego->clasificacion->nombre_clasificacion }}</p>
                                <p class="card-text"><strong>Fecha de Lanzamiento:</strong> {{ $videojuego->fecha_lanzamiento }}</p>
                                <p class="card-text"><strong>Precio:</strong> ${{ $videojuego->precio_reserva }}</p>
                                <p class="card-text"><strong>Stock:</strong> {{ $videojuego->stock_disponible }} unidades</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">No se encontraron videojuegos populares.</p>
        @endforelse
    </div>
</div>
</body>
</html>