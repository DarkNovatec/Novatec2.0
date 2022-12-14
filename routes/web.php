<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'fnIndex'])-> name ('xIndex');
Route::post('/', [PagesController::class, 'fnRegistrar'])-> name ('Estudiante.xRegistrar');


Route::get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar'])-> name ('Estudiante.xActualizar');
Route::put('/actualizar/{id}', [PagesController::class, 'fnUpdate'])-> name ('Estudiante.xUpdate');


Route::delete('/eliminar/{id}', [PagesController::class, 'fnEliminar']) -> name('Estudiante.xEliminar');


Route::get('detalle/{id}', [PagesController::class, 'fnEstDetalle'])-> name ('Estudiante.xDetalle');
Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria']) -> where('numero','[0-9]+')->name('xGaleria');
Route::middleware(['auth:sanctum','verified'])->get('/dashboard', [PagesController::class, 'fnLista'])-> name ('dashboard');


///////// ARRIBAa////
//Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
//Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
//});