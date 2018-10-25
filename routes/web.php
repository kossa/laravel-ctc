<?php

Route::resource('articles', 'ArticleController');
Route::view('/', 'welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
