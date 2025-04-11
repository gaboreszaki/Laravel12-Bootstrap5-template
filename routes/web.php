<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

/// Authed routes
Route::middleware(['auth', 'verified'])->group(function () {

    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::prefix('user')->group(function () {
        Route::view('/settings', 'user.settings')->name('settings');
    });

});
