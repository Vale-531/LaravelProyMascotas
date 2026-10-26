<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('adoptar', function () {
    return view('adoptar');
});

Route::get('temporal', function () {
    return view('temporal');
});
