<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function() {

    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::resource('users', App\Http\Controllers\UserController::class)->except(['index']);

    Route::get('/houses', [App\Http\Controllers\HouseController::class, 'index'])->name('houses.index');
    Route::resource('houses', App\Http\Controllers\HouseController::class)->except(['index']);

    Route::get('/bills', [App\Http\Controllers\BillController::class, 'index'])->name('bills.index');
    Route::resource('bills', App\Http\Controllers\BillController::class)->except(['index']);

    Route::get('/comments', [App\Http\Controllers\CommentController::class, 'index'])->name('comments.index');
    Route::resource('comments', App\Http\Controllers\CommentController::class)->except(['index']);

    Route::get('/images', [App\Http\Controllers\ImageController::class, 'index'])->name('image.index');
    Route::resource('images', App\Http\Controllers\ImageController::class)->except(['index']);

    Route::get('/likes', [App\Http\Controllers\LikeController::class, 'index'])->name('likes.index');
    Route::resource('likes', App\Http\Controllers\LikeController::class)->except(['index']);

    Route::get('/dislikes', [App\Http\Controllers\DislikeController::class, 'index'])->name('dislikes.index');
    Route::resource('dislikes', App\Http\Controllers\DislikeController::class)->except(['index']);

});
