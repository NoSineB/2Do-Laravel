<?php

use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('home');
    Route::post('/todos', [TodoController::class, 'store']);
    Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->can('edit', 'todo');
    Route::patch('/todos/{todo}', [TodoController::class, 'update'])->can('edit', 'todo');
    Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->can('edit', 'todo');

    Route::delete('/logout', [SessionController::class, 'destroy']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login' ,[SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);

    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::post('/register', [RegisterUserController::class, 'store']);
});

