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

Route::get('/about', 'App\Http\Controllers\AboutController@index');
Route::get('/contact', 'App\Http\Controllers\ContactController@index');
Route::post('/contact/post', 'App\Http\Controllers\ContactController@post');
