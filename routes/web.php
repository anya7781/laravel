<?php

Route::any('/', 'MainController@latest');

/* Account routes */

Route::any('exit', 'AccountController@out');

Route::any('account', 'AccountController@enter');

Route::any('users', 'AccountController@userList');

Route::post('new_article', 'AccountController@newArticle');

Route::get('article/{id}', 'AccountController@viewArticle');

Route::get('my_articles', 'AccountController@myArticles');

Route::any('new_articles', 'AccountController@newArticles');

Route::get('new', 'AccountController@getCateg');

Route::post('make-admin', 'AccountController@makeAdmin');

Route::post('delete-user', 'AccountController@deleteUser');

Route::post('public', 'AccountController@makePublic');
Route::any('edit', 'AccountController@editArticle');
Route::post('block', 'AccountController@blockArticle');

Route::post('update', 'AccountController@updateArticle');

/* Main page routes */

Route::get('category/{name}', 'MainController@category');

Route::get('main/article/{id}', 'MainController@viewArticle');

Route::post('addComment', 'MainController@addComment');

Route::get('archives', 'MainController@allPosts');

Route::get('contact', function (){
    return view('user/contact');
});
