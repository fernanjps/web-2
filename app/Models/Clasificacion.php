<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    protected $table = 'clasificacion';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre_clasificacion', 'edad_minima', 'descripcion_clasificacion'];

    // Relación: Una Clasificación tiene muchos Videojuegos
    public function videojuegos()
    {
        return $this->hasMany(Videojuego::class, 'id_clasificacion', 'id');
    }
}
