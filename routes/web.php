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

// Route::get('/home', 'HomeController@index')->name('home');

// Rotte area Admin
Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function() {
    // Route::get('/', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    // Route::get('/', 'UserController@index')->name('index');
    // Route::get('/{user}/edit', 'UserController@edit')->name('edit');
    // Route::put("/{user}/update", 'UserController@update')->name('update');
    Route::resource('plates', 'PlatesController');
});
