<?php

use Illuminate\Support\Facades\Route;

Route::any('/', function () {
    return redirect()->route('login');
});

Route::any('/home', function () {
    if(auth()->user()){
        return redirect()->to('/admin');
    }
});


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
});

