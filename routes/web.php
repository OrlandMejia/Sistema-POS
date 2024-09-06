<?php

use Illuminate\Support\Facades\Route;

// la ruta raiz nos está devolviendo la vista welcome
Route::get('/', function () {
    return view('template');
});

// ruta para el login
Route::get('/login', function () {
    // retorna lo que está dentro de la carpeta auth/login.blade.php
    return view('auth.login');
});

// rutas para los errores 401, 404 y 500
Route::get('/401', function () {
    // retorna lo que está dentro de la carpeta 
    return view('pages.401');
});

Route::get('/404', function () {
    // retorna lo que está dentro de la carpeta 
    return view('pages.404');
});

Route::get('/500', function () {
    // retorna lo que está dentro de la carpeta 
    return view('pages.500');
});