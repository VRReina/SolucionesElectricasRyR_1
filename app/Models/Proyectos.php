<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;
    protected $fillable = [
        "proyecto",
        "descripcion",
        "img_1",
        "img_2"
    ];
}
