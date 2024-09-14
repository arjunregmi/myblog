<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\UserController;
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
    return view('homepage');
});

Route::group(['middleware'=>['auth']], function(){
Route::get('/home', [PostController::class, 'index'])->name('home');

});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    
    Route::resource('photos', PhotoController::class);
    Route::resource('users', UserController::class);
    // ->middleware('role:admin');
    Route::resource('posts', PostController::class);
    Route::resource('posts', PostController::class)->except(['create', 'store', 'destroy'])
    ->middleware('role:user,author,admin');

// Separate middleware for actions that need stricter roles

});

Auth::routes();



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
