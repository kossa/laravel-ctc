<?php

Route::view('/', 'welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('articles', 'ArticleController@index');
Route::get('contact', 'ContactController@index');
