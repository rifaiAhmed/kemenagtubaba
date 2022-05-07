<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home', [
        'title' => 'HOME'
    ]);
});

Route::get('/profil', function () {
    return view('frontend.about', [
        'title' => 'PROFIL'
    ]);
});

Route::get('/sejarah', function () {
    return view('frontend.about', [
        'title' => 'SEJARAH'
    ]);
});

Route::get('/visi-misi', function () {
    return view('frontend.about', [
        'title' => 'VISI MISI'
    ]);
});

Route::get('/struktur', function () {
    return view('frontend.about', [
        'title' => 'STRUKTUR ORGANISASI'
    ]);
});


// Posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/registrasi', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegisterController::class, 'store']);

// Administartor
Route::get('/dashboard', function() {
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/berita', [BeritaController::class, 'index']);
});
