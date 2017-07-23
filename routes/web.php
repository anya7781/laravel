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

Route::get('my_articles/{id}', 'AccountController@viewArticle');

Route::get('my_articles', 'AccountController@myArticles');

Route::any('new_articles', 'AccountController@newArticles');

Route::get('new', 'AccountController@get_categ');

Route::post('make-admin', 'AccountController@makeAdmin');

Route::post('delete-user', 'AccountController@deleteUser');

Route::post('public', 'AccountController@makePublic');
Route::any('edit', 'AccountController@editArticle');
Route::post('block', 'AccountController@blockArticle');

Route::post('update', 'AccountController@updateArticle');
