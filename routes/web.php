<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/post/{post}', [IndexController::class, 'show']);
Route::get('/category/{cat:slug}', [CategoryController::class, 'show']);
Route::get('/register', [UserController::class, 'create']);
Route::post('/register-user', [UserController::class, 'store']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login-user', [UserController::class, 'loginUser']);
Route::post('/create-post', [PostController::class, 'store']);
Route::get('/{user}-account', [UserController::class, 'account']);
Route::get('/edit/post-{post}', [PostController::class, 'edit']);
