<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/check-role', [App\Http\Controllers\HomeController::class, 'checkUserRole'])->middleware('auth')->name('check-role');
