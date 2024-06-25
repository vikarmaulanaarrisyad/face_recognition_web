<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserProfileInformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ROUTE SETTING
    Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
    Route::put('/setting/{setting}', [SettingController::class, 'update'])->name('setting.update');

    // ROUTE USERPROFILE
    Route::get('/user/profile', [UserProfileInformationController::class, 'show'])
        ->name('profile.show');
});
