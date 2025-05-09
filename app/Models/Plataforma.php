<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plataforma extends Model
{
    protected $table = 'plataforma';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre_plataforma', 'fabricante'];

    // Relación: Una Plataforma tiene muchos Videojuegos
    public function videojuegos()
    {
        return $this->hasMany(Videojuego::class, 'id_plataforma', 'id');
    }
}
