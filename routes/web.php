<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/tasks', function () {
    return view('tasks');
})->name('tasks');

Route::get('/calender', function () {
    return view('calender');
})->name('calender');
