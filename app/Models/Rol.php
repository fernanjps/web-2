<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre_rol', 'descripcion_rol'];

    // Relación: Un Rol tiene muchos Usuarios
    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_rol', 'id');
    }
}
