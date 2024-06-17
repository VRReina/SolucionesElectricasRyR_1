<?php

namespace App\Http\Controllers;
use App\Models\Electricidad;
use Illuminate\Http\Request;

class ElectricidadController extends Controller
{
    public function mostrarServiciosElectricidad()
{
    $electricidads = Electricidad::all();
    $automatizacions = Automatizacion::all(); // Obtener también los servicios de automatización
    return view('servicios', compact('electricidads', 'automatizacions'));
}

}
