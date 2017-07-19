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

Route::any('/', function () {
    return view('welcome');
});

Route::any('exit', 'AccountController@out');

Route::any('account', 'AccountController@enter');

Route::any('users', 'AccountController@user_list');

Route::post('new_article', 'AccountController@new_article');

Route::get('my_articles', 'AccountController@myArticles');

Route::get('new_articles', function () {
    return view('account/admin/new_articles');
});

Route::get('new', 'AccountController@get_categ');

Route::post('make-admin', 'AccountController@makeAdmin');

Route::post('delete-user', 'AccountController@deleteUser');