<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/akbar', function () {
    return 'Hello, Akbar!';
});

Route::get('/akbar2', function () {
    return view('akbar');
});
