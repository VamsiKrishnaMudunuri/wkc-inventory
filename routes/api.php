<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;
use App\Traits\CustomException;

use App\Http\Middleware\AuthAPI;
use App\Http\Middleware\ForceJson;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('/v1/auth')
    ->middleware([])
    ->group(function () {
        Route::post('/login', [AuthController::class, 'doLogin']);
        Route::post('/registers', [AuthController::class, 'doRegister']);
        Route::get('/registers/options', [
            AuthController::class,
            'getRegisterOptions',
        ]);
    });

Route::prefix('/v1/users')
    ->middleware([ForceJson::class, AuthAPI::class])
    ->group(function () {
        Route::get('/', [UserController::class, 'getUsers']);
    });
