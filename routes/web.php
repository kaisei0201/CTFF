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

Auth::routes();

// トップページを表示する
Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    // Admin用ルーティング
    Route::get('admin/create', 'AdminController@add');
    Route::get('admin/edit', 'AdminController@edit');
    Route::get('admin/delete', 'AdminController@delete');
    Route::get('admin/update', 'AdminController@update');
    // Teams用ルーティング
    Route::get('team/create', 'TeamController@add');
    Route::get('team/edit', 'TeamController@edit');
    Route::get('team/delete', 'TeamController@delete');
    Route::get('team/update', 'TeamController@update');
    // User用ルーティング
    Route::get('users/create', 'UserController@add');
    Route::get('users/edit', 'UserController@edit');
    Route::get('users/delete', 'UserController@delete');
    Route::get('users/update', 'UserController@update');
    // お問い合わせ用ルーティング
    Route::get('info', 'UserController@info');
    // 検索画面用ルーティング
    Route::get('search', 'UserController@search');
});
