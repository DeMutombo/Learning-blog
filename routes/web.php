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
<<<<<<< HEAD

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
=======
>>>>>>> 4ce8d7ce722a8e4e6debc59a9b894f945847de2e
