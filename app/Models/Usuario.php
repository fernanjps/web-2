<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre', 'apellido', 'email', 'fecha_registro', 'contrasena_hash', 'id_rol'];

    // Relación: Un Usuario pertenece a un Rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol', 'id');
    }

    // Relación: Un Usuario tiene muchas Reseñas
    public function resenas()
    {
        return $this->hasMany(Resena::class, 'id_usuario', 'id');
    }

    // Relación: Un Usuario tiene muchos Favoritos
    public function favoritos()
    {
        return $this->hasMany(Favoritos::class, 'id_usuario', 'id');
    }
}
