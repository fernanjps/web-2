<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    protected $table = 'videojuego';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'titulo', 'id_plataforma', 'id_genero', 'id_desarrollador', 
        'id_clasificacion', 'fecha_lanzamiento', 'precio_reserva', 
        'stock_disponible', 'ruta_imagen_portada', 'estado_videojuego'
    ];

    // Relaciones
    public function plataforma()
    {
        return $this->belongsTo(Plataforma::class, 'id_plataforma', 'id');
    }

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'id_genero', 'id');
    }

    public function desarrollador()
    {
        return $this->belongsTo(Desarrollador::class, 'id_desarrollador', 'id');
    }

    public function clasificacion()
    {
        return $this->belongsTo(Clasificacion::class, 'id_clasificacion', 'id');
    }

    // Relación: Un Videojuego tiene muchas Reseñas
    public function resenas()
    {
        return $this->hasMany(Resena::class, 'id_videojuego', 'id');
    }

    // Relación: Un Videojuego tiene muchos Favoritos
    public function favoritos()
    {
        return $this->hasMany(Favoritos::class, 'id_videojuego', 'id');
    }
}
