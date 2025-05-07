<?php

use App\Http\Controllers\Api\AuthController\AuthController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/logout', [AuthController::class, 'logout']);
Route::post('auth/refresh', [AuthController::class, 'refresh']);
Route::post('auth/me', [AuthController::class, 'me']);


Route::apiResource('users', UserController::class);

Route::apiResource('tasks', TaskController::class);


Route::get('prueba', function () {
    return auth('api')->user();
});
