<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desarrollador extends Model
{
    protected $table = 'desarrollador';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre_desarrollador', 'pais_origen', 'fecha_fundacion', 'sitio_web'];

    // Relación: Un Desarrollador tiene muchos Videojuegos
    public function videojuegos()
    {
        return $this->hasMany(Videojuego::class, 'id_desarrollador', 'id');
    }
}
