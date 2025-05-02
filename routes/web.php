<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Accueil');
});
Route::get('/devis', function () {
    return view('devis');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/produit', function () {
    return view('produit');
});

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
