<?php

namespace App\Http\Controllers;
use App\Models\Resena;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResenaController extends Controller
{
    public function index()
    {
        $reseñas = Resena::with('videojuego', 'usuario')->get();
        return view('reseñas.index', compact('reseñas'));
    }

    public function show($id)
    {
        $reseña = Resena::with('videojuego', 'usuario')->findOrFail($id);
        return view('reseñas.show', compact('reseña'));
    }
}
