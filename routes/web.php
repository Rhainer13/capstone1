<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/victim', function () {
    return view('victim-list');
})->name('victim-list');

Route::get('/history', function () {
    return view('history');
});

Route::get('/register', function () {
    return view('/modals/register-victim-1');
});