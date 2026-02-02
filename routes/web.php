<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\LandingController::class, 'index'])->name('home');

// Public Routes - Student Aspirations
Route::prefix('aspirasi')->group(function () {
    Route::get('/kirim', [\App\Http\Controllers\AspirationController::class, 'submitForm'])->name('aspirations.submit');
    Route::post('/kirim', [\App\Http\Controllers\AspirationController::class, 'store'])->name('aspirations.store');
    Route::get('/cek', [\App\Http\Controllers\AspirationController::class, 'checkForm'])->name('aspirations.check');
    Route::post('/cek', [\App\Http\Controllers\AspirationController::class, 'check'])->name('aspirations.check.post');
});
