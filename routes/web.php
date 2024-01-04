<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/auth', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::redirect('/', '/product');
Route::get('/product', [ProductController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.crate');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.store');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/profile', [UserController::class, 'index'])->name('user.index');
});
