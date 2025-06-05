<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/report', function () {
    return view('pages.report');
})->name('report');

Route::get('/create', function () {
    return view('pages.create_report');
})->name('create');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');