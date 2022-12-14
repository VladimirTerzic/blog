<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

// register
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/', [PostController::class, 'index']);
Route::get('/post/{post}', [PostController::class, 'show']);
Route::post('/post/{post}/comments', [PostCommentController::class, 'store']);
Route::get('/category/{cat:slug}', [CategoryController::class, 'show']);
// Route::get('/register', [UserController::class, 'create']);
Route::post('/register-user', [UserController::class, 'store']);
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/login-user', [UserController::class, 'loginUser']);
Route::post('/create-post', [PostController::class, 'store']);
Route::get('/{user}-account', [UserController::class, 'account']);
Route::get('/user-posts/{user:username}', [UserController::class, 'userPosts']);
Route::get('/edit/post-{post}', [PostController::class, 'edit']);
