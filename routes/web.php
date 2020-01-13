<?php

use App\Http\Controllers\RoleController;
use App\User;

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
//    Route::get('/', function () {
//        return view('pages.dashboard.index');
//    });
   Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/permissions', 'PermissionController@index')->name('permissions');

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
    Route::group(['prefix' => 'roles'], function () {
        Route::get('','RoleController@index')->name('roles');
        Route::get('create' ,'RoleController@create')->name('roles.create');
        Route::post('store' ,'RoleController@store')->name('roles.store');
        Route::get('edit/{id}' ,'RoleController@edit')->name('roles.edit');
        Route::put('update/{id}', 'RoleController@update')->name('roles.update');
        Route::delete('delete/{id}', 'RoleController@delete')->name('roles.delete');
    });
});
