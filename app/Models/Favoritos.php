<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favoritos extends Model
{
    protected $table = 'favoritos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['id_usuario', 'id_videojuego', 'fecha_agregado'];

    // Relación: Un Favorito pertenece a un Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id');
    }

    // Relación: Un Favorito pertenece a un Videojuego
    public function videojuego()
    {
        return $this->belongsTo(Videojuego::class, 'id_videojuego', 'id');
    }
}
