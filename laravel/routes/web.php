<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('usuarios');
});

Route::get('usuarios','UserController@listarUsuarios');

Route::get('cadastrar', function (){
    return view('novo');
});

Route::post('storege', 'UserController@storege');


