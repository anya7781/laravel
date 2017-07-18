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

/*Route::any('/', function () {
    return view('welcome');
});*/

Route::any('/', 'AccountController@index');

Route::any('account', function () {
    return view('account/user');
});

Route::any('admin', function () {
    return view('account/admin');
});

Route::get('users', function () {
    return view('account/user_list');
});

Route::get('my_articles', function () {
    return view('account/my_articles');
});

Route::get('new_articles', function () {
    return view('account/new_articles');
});

Route::get('new', function () {
    return view('account/new');
});