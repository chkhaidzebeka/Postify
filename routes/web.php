<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Posts\PostLikeController;
use App\Http\Controllers\Posts\PostsController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
	return view('home');
})->name('home');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/users/{user:username}/posts',[UserPostController::class,'index'])->name('user.posts'); 

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'process'])->middleware(['throttle:login']);

Route::post('/logout',[LogoutController::class,'destroy'])->name('logout');

Route::post('/posts/{post}/like',[PostLikeController::class,'store'])->name('post.like');
Route::delete('/posts/{post}/unlike',[PostLikeController::class,'destroy'])->name('post.unlike');

Route::resource('posts', PostsController::class);

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

