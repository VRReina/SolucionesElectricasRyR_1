<?php

namespace App\Http\Controllers;
use App\Models\Proyectos;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    public function mostrarProyectos()
{
    $proyectos = Proyectos::all();
    return view('proyectos', compact('proyectos'));
}
}
