<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RegisterController;
use App\Models\Register;

Route::get('/', [ClientController::class, 'index']);

Route::get('/clients/create', [ClientController::class, 'createClient']);

Route::post('/clients', [ClientController::class, 'store']);

Route::get('/users/user', [RegisterController::class, 'createUser']);

Route::get('/users/relatorio', [RegisterController::class, 'dashboard']);

Route::delete('/users/{id}', [RegisterController::class, 'destroy']);

Route::post('/users', [RegisterController::class, 'storeReg']);

Route::get('/category', [ClientController::class, 'category']);