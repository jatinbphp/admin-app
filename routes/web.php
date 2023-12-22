<?php

use Illuminate\Support\Facades\Route;

Route::any('/', function () {
    return redirect()->route('login');
});

Route::any('/home', function () {
    return auth()->user() ? redirect()->to('/admin') : redirect()->route('login');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });
});

