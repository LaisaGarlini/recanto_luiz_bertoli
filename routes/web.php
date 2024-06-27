<?php

use App\Http\Controllers\ComentarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', array("title"=>'Home'));
});

Route::get('/home', function () {
    return view('home', array("title"=>'Home'));
});

Route::get('/sobre', function () {
    return view('sobre', array("title"=>'Sobre'));
});

Route::get('/contato', function () {
    return view('contato', array("title"=>'Contato'));
});

Route::resource('comentario', ComentarioController::class);