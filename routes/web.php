<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CanteenController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\TransactionController;


Route::get('/', function () {
    return view('welcome');

});

Route::get('/canteen', [CanteenController::class, 'index']);
Route::get('/login', [CanteenController::class, 'login']);
Route::get('/checkout', [CanteenController::class, 'checkout']);
Route::get('/checkout/payments', [CanteenController::class, 'payment']);
Route::post('/checkout/payments', [LogController::class, 'pay']);
Route::get('/checkout/payments', [TransactionController::class, 'showmenu']);


Route::get('/test-insert', function () {
    \App\Models\Log::create([
        'nama' => 'Test Name',
        'nomor_meja' => 1,
        'nomor_telp' => '123456789012345678',
    ]);
    return 'Data inserted!';
});