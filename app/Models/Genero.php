<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'genero';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre_genero', 'descripcion_genero'];

    // Relación: Un Género tiene muchos Videojuegos
    public function videojuegos()
    {
        return $this->hasMany(Videojuego::class, 'id_genero', 'id');
    }
}
