<?php

use Illuminate\Support\Facades\Route;

Route::get('dashboard', [Dashboard::class, 'index'])->name('admin.dashboard');
Route::resources([
    'dashboard' => Dashboard::class,
    'posts' => PostController::class,
    'users' => UserController::class,
    'media' => MediaController::class,
]);
