<?php

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
Route::get('post', 'App\Http\Controllers\PostController@index')->name('post.index');
Route::get('post/create', 'App\Http\Controllers\PostController@create')->name('post.create');
Route::post('post/store', 'App\Http\Controllers\PostController@store')->name('post.store');
Route::get('post/{post}', 'App\Http\Controllers\PostController@show')->name('post.show');

