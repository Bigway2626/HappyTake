<?php
Auth::routes();
Route::get('/', 'PostController@index');
Route::get('/search_post', 'PostController@search_post');
Route::get('/post/{id}', 'PostController@post');

Route::get('/my_posts', 'UserController@my_posts');
Route::get('/my_post/{id}', 'UserController@my_post');
Route::get('/create_post', 'UserController@create_post_page');
Route::post('/create_post', 'UserController@create_post');

Route::get('/my_participations', 'UserController@my_participations');
Route::get('/participation/{id}', 'UserController@participation');
Route::post('/create_participation', 'UserController@create_participation');
Route::post('/create_comment', 'UserController@create_comment');

Route::get('/profile', 'UserController@profile');
Route::post('/edit_profile', 'UserController@edit_profile');
Route::post('/edit_avatar', 'UserController@edit_avatar');
Route::post('/change_password', 'UserController@change_password');
