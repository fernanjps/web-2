<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    protected $table = 'resena';
    public $timestamps = false;
    protected $primaryKey = 'id';
    

    protected $fillable = ['id_usuario', 'id_videojuego', 'fecha_resena', 'calificacion', 'comentario'];

    // Relación: Una Reseña pertenece a un Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id');
    }

    // Relación: Una Reseña pertenece a un Videojuego
    public function videojuego()
    {
        return $this->belongsTo(Videojuego::class, 'id_videojuego', 'id');
    }
}
