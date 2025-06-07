<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [UserController::class, 'index'])->name('login.process');

Route::get('/create', function () {
    return view('pages.create_report');
})->name('create');

Route::get('/home', function () {
    return view('pages.home');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/report', function () {
        return view('pages.report');
    })->name('report');
});

Route::get('/report/detail', function () {
    return view('pages.detail-report');
});