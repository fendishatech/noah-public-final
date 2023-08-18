<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/services', function () {
    return view('services.index');
})->name('services');
