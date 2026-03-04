<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\PenjualanController;

Route::prefix('stok')->group(function () {
    Route::get('/', [StokController::class, 'index']);
});

Route::prefix('penjualan')->group(function () {
    Route::get('/', [PenjualanController::class, 'index']);
});

Route::get('/', [WelcomeController::class, 'index']);

Route::prefix('user')->group(function () {

    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);

}); // ← ini penutup group user

Route::prefix('level')->group(function () {

    Route::get('/', [LevelController::class, 'index']);
    Route::post('/list', [LevelController::class, 'list']);

});

Route::prefix('kategori')->group(function () {

    Route::get('/', [KategoriController::class, 'index']);
    Route::post('/list', [KategoriController::class, 'list']);

});

Route::prefix('supplier')->group(function () {

    Route::get('/', [SupplierController::class, 'index']);
    Route::post('/list', [SupplierController::class, 'list']);

});

Route::prefix('barang')->group(function () {

    Route::get('/', [BarangController::class, 'index']);
    Route::post('/list', [BarangController::class, 'list']);

});