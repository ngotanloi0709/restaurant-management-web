<?php

use App\Http\Controllers\Api\UserApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/user')->group(function () {
    Route::get('/register', [UserApiController::class, 'postRegister'])->name('api.user.register.post');
});
