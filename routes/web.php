<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'index'])->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
