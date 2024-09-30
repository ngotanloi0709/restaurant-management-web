<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->group(function () {
    Route::get('register', [UserController::class, 'getRegister'])->name('user.register.get');
    Route::post('register', [UserController::class, 'postRegister'])->name('user.register.post');
});
