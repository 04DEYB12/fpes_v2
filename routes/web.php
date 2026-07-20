<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('lp', function () {
    return view('lp');
});

