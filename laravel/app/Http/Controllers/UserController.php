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

    public function storage(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('usuarios');
    }

    public function edit(User $userId){
        return view('editar', [
            'user' => $userId
        ]);
    }

    public function update(Request $request, User $user){
        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($request->password)){
            $user->password = $request->password;
        }
        $user->save();

        return redirect('usuarios');
    }

    public function delete(User $user){
        $user->delete();
        return redirect('usuarios');
    }
}
