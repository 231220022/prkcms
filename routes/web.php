<?php
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Private\HomeController;
use App\Http\Controllers\Private\ContactController;
use App\Http\Controllers\Private\ProfileController;
use App\Http\Controllers\Private\FooterController;
use App\Http\Controllers\Private\UserController;
use App\Http\Controllers\Private\DashController;
use App\Http\Controllers\Auth\LoginController;


use App\Http\Controllers\Public\HomeControllerPublic;
use App\Http\Controllers\Public\ProfileControllerPublic;
use App\Http\Controllers\Public\ContactControllerPublic;
// use App\Http\Controllers\private\UserController;

Auth::routes();
Route::middleware('auth')->group(function () {
Route::resource('homes', HomeController::class);
Route::resource('contacts', ContactController::class);
Route::resource('profiles', ProfileController::class);
Route::resource('footers', FooterController::class);
Route::resource('users', UserController::class);
Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

//Public area
Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomeControllerPublic:: class, 'index'])->name('home');
    Route::get('/profile', [ProfileControllerPublic:: class, 'index'])->name('profile');
    Route::get('/contact', [ContactControllerPublic:: class, 'contact'])->name('contact');
    Route::post('/contact/save', [ContactControllerPublic:: class, 'store'])->name('save');
    });





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
