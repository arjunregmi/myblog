<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Author\PostController as AuthorPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::group(['middleware'=>['auth']], function(){
    Route::resource('posts',PostController::class);
    Route::resource('photos',PhotoController::class); 
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    //Route::get('/home', [PostController::class, 'index'])->name('home');

    // Route to display all posts for users
    Route::get('/posts', [UserPostController::class, 'index'])->name('user.posts.index');

});

Route::group(['middleware' => 'auth:Admin'], function () {
    Route::resource('/admin/users', AdminUserController::class);
    Route::resource('/admin/posts', AdminPostController::class);

});

Route::group(['middleware' => 'auth:Author'], function () {
    Route::resource('/author/posts', AuthorPostController::class);

});

Auth::routes();


