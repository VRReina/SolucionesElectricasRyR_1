<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electricidad extends Model
{
    use HasFactory;
    protected $fillable = [
        "servicio",
        "descripcion",
        "img"
    ];
}
