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

Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('welcome');
});

//Route::get('admin/dashboard', 'Admin\AdminDashboardController@index')->name('admin.dashboard');

Route::group(['prefix'=>'admin'],function (){
    require __DIR__ . '/admin.php';
});

Route::group(['prefix'=>'user'],function (){
    require __DIR__ . '/user.php';
});