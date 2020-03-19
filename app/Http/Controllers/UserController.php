<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if(request()->has('empty')) {
            $users = [];
        } else{
            $users = [
                'Jaime', 'Maria', 'Carlos', 'Lucia',
            ];
        }

        $tittle = 'Listado de usuarios';

        return view('users.index', compact('tittle','users'));
    }

    public function show($id)
    {
        return view('users.show', compact('id'));
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
