<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::any('/', function () {
    return auth()->user() ? redirect()->to('/admin') : redirect()->route('login');
});

Route::any('/home', function () {
    return auth()->user() ? redirect()->to('/admin') : redirect()->route('login');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('/', DashboardController::class);
});

