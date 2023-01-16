<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;

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

Route::get('/', [LandingController::class, 'index']);
Route::get('/post/{id}', [LandingController::class, 'detail'])->name('detail');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authentication'])->name('login.auth');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registered'])->name('registered');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
    Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
    Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::get('/artikel/{id}', [ArtikelController::class, 'edit'])->name('artikel.edit');
    Route::put('/artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
    Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');

    Route::resource('/kategori', KategoriController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
