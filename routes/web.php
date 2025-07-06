<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::view('/dashboard', 'dashboard')->name('dashboard');
