<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Videojuego;
class VideojuegoController extends Controller
{
    public function populares()
    {
        // Filtra los videojuegos específicos por título (o usa otro criterio)
        $videojuegos = Videojuego::with('plataforma', 'genero', 'desarrollador', 'clasificacion')
            ->whereIn('titulo', ['Once Human', 'Resident Evil 4 Remake'])
            ->get();

        return view('videojuegos.populares', compact('videojuegos'));
    }
}
