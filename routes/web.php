<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Route::controller(UsuarioController::class)->group(function(){
    Route::get('/usuarios', 'index');
    Route::get('/usuario/{$id}', 'show');
    Route::post('/usuario', 'store');
    Route::put('/usuario/{$id}', 'update');
    Route::delete('/usuario/{$id}', 'destroy');
}) ; */