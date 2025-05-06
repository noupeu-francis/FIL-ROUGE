<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/services', function () {
    return view('service');
})->name('services');

Route::get('/produits', function () {
    return view('produit');
})->name('produits');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', function (Request $request) {
    // Logique de traitement du formulaire
    return redirect()->back()->with('success', 'Message envoyé avec succès !');
})->name('contact.submit');

Route::get('/dashboard', function () {
    return view('dashboardutilisateur');
})->middleware(['auth'])->name('dashboard');

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
