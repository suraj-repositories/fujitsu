<?php

use App\Http\Controllers\SuperAdmin\Authentication\RegistrationController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Http\Controllers\SuperAdmin\Settings\AuthSettings\AuthThemeController;
use App\Http\Controllers\SuperAdmin\Settings\AuthSettings\RegistrationSettingController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::prefix('/settings')->name('settings.')->group(function(){

    Route::get('/auth/registration', [RegistrationSettingController::class, 'index'])->name('auth.registration.index');
    Route::get('/auth/theme-settings', [AuthThemeController::class, 'index'])->name('auth.theme-settings.index');
    Route::post('/auth/theme-settings/change', [AuthThemeController::class, 'changeTheme'])->name('auth.theme-settings.change.index');
});


