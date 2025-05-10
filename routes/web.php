<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/descricao/{evento}', function () {
    return view('descricao-evento');
});



//ADMIN

Route::get('/admin', function () {
    return redirect('login');
});

Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/lista-eventos', function () {
    return view('admin/lista-eventos');
});

Route::get('/cadastrar-eventos', function () {
    return view('admin/cadastra-eventos');
});
