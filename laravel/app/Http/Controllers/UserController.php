<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function listarUsuarios(){
        $usuarios = User::all();


        return view('usuarios', [
            'users' => $usuarios
        ]);
    }
}
