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

Route::get('/actualmente', function () {
    return view('actualmente');
});

Route::get('/metas', function () {
    return view('metas');
});

Route::get('/Primer expe', function () {
    return view('Primer expe');
});

Route::get('/segunda expe', function () {
    return view('segunda expe');
});