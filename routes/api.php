<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UsuarioController::class)->group(function(){
    Route::get('/usuarios','index');
    Route::get('/usuario/{$id}','show');
    Route::post('/usuario','store');
    Route::put('/usuario/{$id}','update');
    Route::delete('/usuario/{$id}','destroy');
}) ;  


