<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\EspectadorController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[EspectadorController::class, 'index'])->name('espectador.index');

Route::get('/create',[EspectadorController::class, 'create'])->name('espectador.create');

Route::post('/create',[EspectadorController::class, 'store'])->name('espectador.store');

Route::match(array('PUT','PATCH'),'update/{id}',[EspectadorController::class, 'update'])->name('espectador.update');

Route::get('/show/{id}',[EspectadorController::class, 'show'])->name('espectador.show');

Route::get('/edit/{id}',[EspectadorController::class, 'edit'])->name('espectador.edit');

Route::delete('/destroy/{id}',[EspectadorController::class, 'destroy'])->name('espectador.destroy');


