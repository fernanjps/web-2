
<!DOCTYPE html>
<html>
<head>
    <title>Reseñas de Videojuegos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Reseñas de Videojuegos</h1>
    @foreach ($reseñas as $reseña)
    <p>{{ $reseña->comentario }} - Calificación: {{ $reseña->calificacion }}</p>
    @endforeach
</body>
</html>