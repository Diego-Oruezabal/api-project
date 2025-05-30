<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response() ->json([
            'message' => 'Listado de usuarios'
        ]);
    }

    public function store()
    {
        return response() ->json([
            'message' => 'Usuario creado'
        ]);
    }

    public function show($user)
    {
        return response() ->json([
            'message' => 'Recuperado usuario: ' . $user
        ]);
    }

    public function update($user)
    {
        return response() ->json([
            'message' => 'Actualizado usuario: ' . $user
        ]);
    }

    public function destroy($user)
    {
        return response() ->json([
            'message' => 'Eliminado usuario: ' . $user
        ]);
    }


}
