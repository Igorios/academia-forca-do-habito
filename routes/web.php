<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', [ClientController::class, 'index']);

Route::get('/clients/create', [ClientController::class, 'createClient']);

Route::post('/clients', [ClientController::class, 'store']);

Route::get('/users/user', [ClientController::class, 'createUser']);

Route::get('/category', [ClientController::class, 'category']);