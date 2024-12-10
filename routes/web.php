<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/register', [AuthController::class, 'registerStore']);

Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);
