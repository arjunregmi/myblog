<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
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
    Route::get('/home', [PostController::class, 'index'])->name('home');

});

Route::group(['middleware' => 'auth:adminPanel'], function () {
    Route::resource('/admin/users', AdminUserController::class);
    Route::resource('/admin/posts', AdminPostController::class);

});

Auth::routes();


