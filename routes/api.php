<?php

use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return response()->json([
        'message' => 'Hello pinche wey desde API'
    ]);
});

/*
//Listar registros
Route::get('users', [UserController::class, 'index']);

//Crear registros
Route::post('users', [UserController::class, 'store']);

//Recuperar registros
Route::get('users/{id}', [UserController::class, 'show']);

//Actualizar registros
Route::put('users/{id}', [UserController::class, 'update']);

//Eliminar registros
Route::delete('users/{id}', [UserController::class, 'destroy']);

*/

Route::get('users/cursos', function(){
    return response()->json ([
        'message'=>'Listado de cursos'
    ]);
});

Route::apiResource('users', UserController::class);

Route::apiResource('tasks', TaskController::class);
