<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //return view('welcome');
    return redirect('usuarios');
});

Route::get('usuarios','UserController@listarUsuarios');

Route::get('cadastrar', function(){
         return view('novo');
});

Route::post('storage', 'UserController@storage');

Route::get('editar/{userId}', 'UserController@edit');

Route::put('update/{user}', 'UserController@update');

Route::delete('delete/{user}', 'UserController@delete');
