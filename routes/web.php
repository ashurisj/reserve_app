<?php

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

// Auth::routes(['verify' => true]);

// Route::get('/', 'HomeController@index')->name('home');

// Route::resource('users', 'AuthController');

// Route::prefix('');

Route::resource('/user', 'UserController');
Route::resource('/plan', 'PlanController');
Route::resource('/comment', 'CommentController');

Route::get('/', function () {
    return view('index');
});

Route::get('/new', function () {
    return view('new');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');