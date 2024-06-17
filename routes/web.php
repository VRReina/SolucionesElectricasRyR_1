<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CotizacionesController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ElectricidadController;
use App\Http\Controllers\AutomatizacionController;
use App\Http\Controllers\ProyectosController;

Route::get('/cotizaciones', [CotizacionesController::class, 'showForm']);
Route::post('/cotizaciones', [CotizacionesController::class, 'submitForm']);


// Route::get('/servicios', [ServiciosController::class, 'mostrarServicios'])->name('servicios');
Route::get('/servicios', [ElectricidadController::class, 'mostrarServiciosElectricidad'])->name('servicios');
Route::get('/servicios', [AutomatizacionController::class, 'mostrarServiciosAutomatizacion'])->name('servicios');
Route::get('/proyectos', [ProyectosController::class, 'mostrarProyectos'])->name('proyectos');

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

