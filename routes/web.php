<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Models\Post;

// Home route shows register form
Route::get('/', [AuthController::class, 'showRegister'])->name('register');
Route::post('/', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Home page after login
Route::get('/home', function () {
    return view('home', ['posts' => Post::paginate(5)]);
})->name('home');

// Post-related routes
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'GetTheSotre'])->name('store');
Route::get('/edit/{id}', [PostController::class, 'editit'])->name('edit');
Route::put('/update/{id}', [PostController::class, 'updateit'])->name('update');
Route::delete('/delete/{id}', [PostController::class, 'deleteit'])->name('delete');


