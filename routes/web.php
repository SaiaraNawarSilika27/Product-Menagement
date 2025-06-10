<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Models\Post;


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

    Route::get('/', function () {
        return view('welcome',['posts'=>Post::paginate(5)]);})->name('home');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'GetTheSotre'])->name('store');
Route::get('/edit/{id}', [PostController::class, 'editit'])->name('edit');
Route::put('/update/{id}', [PostController::class, 'updateit'])->name('update');
Route::delete('/delete/{id}', [PostController::class, 'deleteit'])->name('delete');


