<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Traits\CustomException;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(
    [
        'prefix' => '/v1/auth',
        'middleware' => [],
    ],
    function () {
        Route::post('/login', [AuthController::class, 'doLogin']);
        Route::post('/register', [AuthController::class, 'doRegister']);
    },
);
