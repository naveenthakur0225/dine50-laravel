<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::Resource('users', UserController::class, [
        'names' => [
            'index'   => 'users.index',
            'create'  => 'users.create',
            'store'   => 'users.store',
            'edit'    => 'users.edit',
            'update'  => 'users.update',
        ],
    ]);
    Route::resource('restaurants', RestaurantController::class);
});
