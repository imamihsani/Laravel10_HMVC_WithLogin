<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\Auth\LoginController;
use Modules\Auth\Http\Controllers\Auth\RegisterController;
use Modules\Auth\Http\Controllers\Auth\ForgotPasswordController;
use Modules\Auth\Http\Controllers\Auth\ResetPasswordController;
use Modules\Auth\Http\Controllers\Auth\ConfirmPasswordController;
// use App\Http\Controllers\HomeController;



Route::group(['middleware' => 'web'], function() {
    // Authentication Routes
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    
    // Registration Routes
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
    
    // Password Reset Routes
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])
         ->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])
         ->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])
         ->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])
         ->name('password.update');
    
    // Email Verification Routes (if needed)
//     Route::get('email/verify', [VerificationController::class, 'show'])
//          ->name('verification.notice');
//     Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
//          ->name('verification.verify');
//     Route::post('email/resend', [VerificationController::class, 'resend'])
//          ->name('verification.resend');

     //     Route::get('/home', [HomeController::class, 'index'])->name('home');

});