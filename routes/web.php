<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
--------------------------------------------------------------------------
 Web Routes
--------------------------------------------------------------------------
Here is where you can register web routes for your application. These routes are loaded by the RouteServiceProvider within a group which contains the "web" middleware group. Now create something great!
*/

Route::get('/', [SessionController::class, 'index']);

# Artikel Route
Route::get('artikel', [SessionController::class, 'ar']);
Route::get('Bahaya-Mikroplastik-Bagi-Lingkungan-serta-Manusia', [SessionController::class, 'ar1']);
Route::get('Hujan-Mikroplastik-di-Paris:Fenomena-Baru-yang-Buruk', [SessionController::class, 'ar2']);
Route::get('Bahaya-Oxodegradable:Solusi-yang-Menjadi-Masalah-Baru', [SessionController::class, 'ar3']);

# Tantangan Route
Route::get('tantangan', [ChallengeController::class, 'challengeList'])->name("challenge-list");
Route::get('tantangan-1', [ChallengeController::class, 'firstChallenge'])->name("first-challenge");
Route::post('tantangan', [ChallengeController::class, 'postChallenge'])->name("challenge.post");
Route::get('tantangan-2', [SessionController::class, 'celen2'])->name("second-challenge");
Route::get('tantangan-3', [SessionController::class, 'celen3'])->name("third-challenge");


Route::get('form-tantangan-pertama', [SessionController::class, 'ucelen1']);
Route::get('form-tantangan-kedua', [SessionController::class, 'ucelen2']);
Route::get('form-tantangan-ketiga', [SessionController::class, 'ucelen3']);


# Lokasi Route
Route::get('/lokasi', [SessionController::class, 'lks']);

# About Route
Route::get('/tentang-kita', [SessionController::class, 'tk']);

# Login Route
Route::get('/masuk', [AuthController::class, 'loginView'])->name('login.get');
Route::post("/masuk", [AuthController::class, "loginForm"])->name("login.post");
Route::get('/dashboard', [SessionController::class, 'dashboard']);
Route::post('/postlogin', [SessionController::class, 'login'])->name('postlogin');

# Regis Route
Route::get('/registrasi', [AuthController::class, 'registerView'])->name('register.get');

Route::post('/postsignup', [AuthController::class, 'registerForm'])->name('register.post');
Route::get('/signout', [AuthController::class, 'signOut'])->name('signOut.get');

# User Route
Route::get('/user', [SessionController::class, 'user']);

# Admin Route
Route::get('/admin', [SessionController::class, 'admin']);
Route::get('/admin/detail-user', [SessionController::class, 'dtl']);
