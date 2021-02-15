<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/post', [App\Http\Controllers\HomeController::class, 'show'])->name('post');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/post', [PostController::class, 'show'])->name('post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
