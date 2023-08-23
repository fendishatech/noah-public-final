<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;


// HOME ROUTES

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/services', function () {
    return view('services.index');
})->name('services');


// AUTH ROUTES

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/confirm', [ClientController::class, 'confirmRegister'])->name('confirm');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/register', [ClientController::class, 'register']);
Route::post('/login', [MemberController::class, 'login']);

// MEMBERS AREA ROUTES
Route::get('dashboard', [MemberController::class, 'dashboard']);
