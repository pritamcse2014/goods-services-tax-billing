<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartiesTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login']);

Route::post('/', [AuthController::class, 'loginStore']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/register', [AuthController::class, 'registerStore']);

Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/partiesType', [PartiesTypeController::class, 'partiesTypeList']);

    Route::get('admin/partiesType/add', [PartiesTypeController::class, 'partiesTypeAdd']);

    Route::post('admin/partiesType/add', [PartiesTypeController::class, 'partiesTypeStore']);

    Route::get('admin/partiesType/edit/{id}', [PartiesTypeController::class, 'partiesTypeEdit']);

    Route::post('admin/partiesType/edit/{id}', [PartiesTypeController::class, 'partiesTypeUpdate']);

    Route::get('admin/partiesType/delete/{id}', [PartiesTypeController::class, 'partiesTypeDelete']);

    Route::get('admin/parties', [PartiesTypeController::class, 'partiesList']);

    Route::get('admin/parties/add', [PartiesTypeController::class, 'partiesAdd']);

    Route::post('admin/parties/add', [PartiesTypeController::class, 'partiesStore']);
});

Route::get('/logout', [AuthController::class, 'logout']);
