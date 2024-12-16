<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GSTBillsController;
use App\Http\Controllers\MyAccountController;
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

    Route::get('admin/partiesType/pdfGenerator', [PartiesTypeController::class, 'partiesTypePdfGenerator']);

    Route::get('admin/parties', [PartiesTypeController::class, 'partiesList']);

    Route::get('admin/parties/add', [PartiesTypeController::class, 'partiesAdd']);

    Route::post('admin/parties/add', [PartiesTypeController::class, 'partiesStore']);

    Route::get('admin/parties/edit/{id}', [PartiesTypeController::class, 'partiesEdit']);

    Route::post('admin/parties/edit/{id}', [PartiesTypeController::class, 'partiesUpdate']);

    Route::get('admin/parties/delete/{id}', [PartiesTypeController::class, 'partiesDelete']);

    Route::get('admin/gstBills', [GSTBillsController::class, 'gstBillsList']);

    Route::get('admin/gstBills/add', [GSTBillsController::class, 'gstBillsAdd']);

    Route::post('admin/gstBills/add', [GSTBillsController::class, 'gstBillsStore']);

    Route::get('admin/gstBills/edit/{id}', [GSTBillsController::class, 'gstBillsEdit']);

    Route::post('admin/gstBills/edit/{id}', [GSTBillsController::class, 'gstBillsUpdate']);

    Route::get('admin/gstBills/delete/{id}', [GSTBillsController::class, 'gstBillsDelete']);

    Route::get('admin/gstBills/view/{id}', [GSTBillsController::class, 'gstBillsView']);

    Route::get('admin/myAccount', [MyAccountController::class, 'myAccount']);

    Route::post('admin/myAccount/update', [MyAccountController::class, 'myAccountUpdate']);
});

Route::get('/logout', [AuthController::class, 'logout']);
