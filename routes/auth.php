<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\SocialMediaLoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.validate');

    Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.save');

    Route::get('/register/exists', [AuthController::class, 'checkIfExists'])->name('register.exists');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

    Route::get('/google-login', [SocialMediaLoginController::class, 'googlePage'])->name('google.login');
    Route::get('/auth/google/callback', [SocialMediaLoginController::class, 'googleRedirect'])->name('google.callback');

    Route::get('/auth/linkedin', [SocialMediaLoginController::class, 'linkedinPage'])->name('linkedin.login');
    Route::get('/auth/linkedin/callback', [SocialMediaLoginController::class, 'linkedinRedirect'])->name('linkedin.callback');

    Route::get('/auth/facebook', [SocialMediaLoginController::class, 'facebookPage'])->name('facebook.login');
    Route::get('/auth/facebook/callback', [SocialMediaLoginController::class, 'facebookRedirect'])->name('facebook.callback');

});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
