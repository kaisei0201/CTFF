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

Route::group([], function() {
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
    // トップ画面用ルーティング
    // お問い合わせ用ルーティング
    // 検索画面用ルーティング
});