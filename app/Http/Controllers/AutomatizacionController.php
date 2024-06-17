<?php

namespace App\Http\Controllers;
use App\Models\Automatizacion;
use Illuminate\Http\Request;
use App\Models\Electricidad;

class AutomatizacionController extends Controller
{
    public function mostrarServiciosAutomatizacion()
{
    $electricidads = Electricidad::all();
    $automatizacions = Automatizacion::all(); // Obtener también los servicios de automatización
    return view('servicios', compact('electricidads', 'automatizacions'));
}

}
