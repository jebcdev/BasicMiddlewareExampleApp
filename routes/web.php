<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');


Route::prefix('/')->middleware(['auth'])->group(function () {

    Route::get('/admin', [AdminController::class, 'index'])
        // ->middleware('admin')
        ->name('admins.index');

    Route::get('/user', [UserController::class, 'index'])
        // ->middleware('user')
        ->name('users.index');

    Route::get('/user/onlyAdmin', [UserController::class, 'onlyAdmin'])
        ->middleware('admin')
        ->name('users.onlyAdmin');
});












// 

require __DIR__ . '/auth.php';
/* prefix('admin')-> */