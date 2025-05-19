<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/descricao/{evento}', function () {
    return view('descricao-evento');
});

// Route::get('/', [EventoController::class, 'index']);

// Route::get('/descricao/{evento}', [EventoController::class, 'show']);

// Route::get('/menu', function () {
//     return view('menu');
// });





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
