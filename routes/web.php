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

use App\User;

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        $users = User::get();
        return view('pages.dashboard.dashboard', compact('users'));
    });

    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'users'], function () {
        Route::get('', 'UserController@index')->name('users');
        Route::get('create', 'UserController@create')->name('users.create');
        Route::post('store', 'UserController@store')->name('users.store');
        Route::get('edit/{id}', 'UserController@edit')->name('users.edit');
    });
});


