<!DOCTYPE html>
<html>
<head>
    <title>Reseña de {{ $reseña->videojuego->titulo }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Reseña de {{ $reseña->videojuego->titulo }}</h1>
    <p>Por: {{ $reseña->usuario->nombre }} {{ $reseña->usuario->apellido }}</p>
    <p>Calificación: {{ $reseña->calificacion }}/5</p>
    <p>Comentario: {{ $reseña->comentario }}</p>
    <p>Fecha: {{ $reseña->fecha_resena }}</p>
    <a href="{{ route('reseñas.index') }}">Volver a reseñas</a>
</body>
</html>