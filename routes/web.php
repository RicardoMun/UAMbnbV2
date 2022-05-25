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

    Route::get('/properties', [App\Http\Controllers\PropertyController::class, 'index'])->name('properties.index');
    Route::resource('properties', App\Http\Controllers\PropertyController::class)->except(['index']);

    Route::get('/bills', [App\Http\Controllers\BillController::class, 'index'])->name('bills.index');
    Route::resource('bills', App\Http\Controllers\BillController::class)->except(['index']);

    Route::get('/comments', [App\Http\Controllers\CommentController::class, 'index'])->name('comments.index');
    Route::resource('comments', App\Http\Controllers\CommentController::class)->except(['index']);

});