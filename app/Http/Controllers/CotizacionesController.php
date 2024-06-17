<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotizaciones;

class CotizacionesController extends Controller
{
    public function showForm()
    {
        return view('welcome');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'tipo_persona' => 'required|string|max:255',
            'tipo_documento' => 'required|string|max:255',
            'id_cliente' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'tipo_servicio' => 'required|string|max:255',
            'servicio' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        Cotizaciones::create($validatedData);

        return redirect()->back()->with('success', 'Cotización enviado con éxito!');
    }
}
