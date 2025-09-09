<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nacimiento', function () {
    return view('nacimiento');
});

Route::get('/niñez', function () {
    return view('niñez');
});

Route::get('/adolescencia', function () {
    return view('adolescencia');
});