<?php

use App\Http\Controllers\SuperAdmin\Authentication\RegistrationController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/authentication/registration', [RegistrationController::class, 'index'])
    ->name('authentication.registration.index');
