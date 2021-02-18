<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/{post_id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{post_id}', [AdminController::class, 'update'])->name('admin.update');

Route::get('/post/{id}', [PostController::class, 'show'])->name('post');
