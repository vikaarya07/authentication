<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('index');
});
Route::get('/login', [LoginController::class, 'index'])->name("login")->middleware("guest");
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware("guest");
Route::post('/register', [RegisterController::class, 'store']);
