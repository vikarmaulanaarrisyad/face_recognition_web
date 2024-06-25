<?php

use App\Http\Controllers\SensorDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/faces/data', [SensorDataController::class, 'data'])->name('face.data');
Route::apiResource('/face', SensorDataController::class)->only('store');
