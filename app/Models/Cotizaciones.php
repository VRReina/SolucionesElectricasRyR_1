<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizaciones extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada a este modelo
    protected $table = 'cotizaciones';

    // Los atributos que son asignables masivamente
    protected $fillable = [
        'tipo_persona',
        'tipo_documento',
        'id_cliente',
        'nombre',
        'email',
        'telefono',
        'direccion',
        'tipo_servicio',
        'servicio',
        'descripcion',
    ];
}
