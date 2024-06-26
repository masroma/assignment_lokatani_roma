<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::get('/data', [UserController::class, 'data'])->name('users.data');
Route::get('/users/create',  [UserController::class, 'create'])->name('users.create');
Route::post('/users',  [UserController::class,'store'])->name('users.store');
Route::get('/users/show/{id}',  [UserController::class,'show'])->name('users.show');
Route::get('/users/{id}/edit',  [UserController::class,'edit'])->name('users.edit');
Route::post('/users/{id}',  [UserController::class,'update'])->name('users.update');
Route::get('/users/{id}',  [UserController::class,'destroy'])->name('users.destroy');