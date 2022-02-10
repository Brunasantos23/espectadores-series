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

Route::get('/', function () {
    return view('welcome');
});

Route::get('teste',[StatusController::class, 'teste']);

Route::get('teste2',[StatusController::class, 'teste2']);

Route::get('teste3',[StatusController::class, 'teste3']);

Route::get('teste4',[StatusController::class, 'teste4']);

Route::get('index',[EspectadorController::class, 'index']);

Route::get('show/{id}',[EspectadorController::class, 'show']);

Route::delete('destroy/{id}',[EspectadorController::class, 'destroy']);

Route::get('form',[EspectadorController::class, 'create']);
