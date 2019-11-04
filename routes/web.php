<?php

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
        Route::get('profile', 'UserController@profile')->name('users.profile');

        Route::group(['middleware' => ['permission:create']], function () {
            Route::get('create', 'UserController@create')->name('users.create');
            Route::post('store', 'UserController@store')->name('users.store');
        });

        Route::group(['middleware' => ['permission:edit']], function () {
            Route::get('edit/{id}', 'UserController@edit')->name('users.edit');
            Route::put('update/{id}', 'UserController@update')->name('users.update');
        });

        Route::group(['middleware' => ['permission:delete']], function () {
            Route::delete('delete/{id}', 'UserController@delete')->name('users.delete');
        });
    });
});
