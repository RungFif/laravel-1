<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//get data
Route::get('/arkandi', function () {
    $penampung = 'Hello World';
    return view('arkandi', ['penampung' => $penampung]);
});