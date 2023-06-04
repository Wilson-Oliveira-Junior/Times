<?php

use Illuminate\Support\Facades\Route;


Route::get('/consulta', function () {
    return view('Consulta');
});

Route::get('/cadastro', function () {
    return view('Cadastro');
});


