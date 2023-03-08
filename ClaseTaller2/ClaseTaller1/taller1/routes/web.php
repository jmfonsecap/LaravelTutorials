<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/users', 'App\Http\Controllers\UserController@index')->name('user.index');
Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('user.create');
Route::post('/users/save', 'App\Http\Controllers\UserController@save')->name('user.save');
Route::get('/users/delete/{id}', 'App\Http\Controllers\UserController@delete')->name('user.delete');
Route::get('/users/{id}', 'App\Http\Controllers\UserController@show')->name('user.show');
