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


Route::get('user/manager', 'Admin\AdminUserManagerController@index')->name('user.manager');
Route::get('user/edit-user/{id}', 'Admin\AdminUserManagerController@getItem')->name('user.getItem');
Route::post('user/edit-user/{id}', 'Admin\AdminUserManagerController@postItem')->name('user.postItem');
Route::get('user/dashboard', 'User\UserDashboardController@index')->name('user.dashboard');