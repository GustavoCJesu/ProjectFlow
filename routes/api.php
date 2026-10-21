<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Rota de Login
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group( function() {

    //Retorna Usuario logado com campos -> (Id, Name, Email)
    Route::get('/user', [UserController::class, 'getUser']);

    //Rota de Logout
    Route::post('/logout', [AuthController::class, 'logout']);
});
