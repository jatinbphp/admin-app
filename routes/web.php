<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
});


Route::get('/home', function () {
    return "true";
});








// Auth::routes();

