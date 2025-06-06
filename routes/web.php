<?php

use App\Http\Controllers\UserController;
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

Route::get('/login', [UserController::class, 'index'])
    ->middleware('guest')
    ->name('login');  // beri nama route GET login

Route::post('/login', [UserController::class, 'login'])
    ->middleware('guest')
    ->name('login.process'); // beri nama route POST login-process

Route::get('/report/detail', function () {
    return view('pages.detail-report');
});