<?php

Route::resource('users', 'UserController');
Route::get('/users', 'UserController@search')->name('users.search');

Route::resource('categories', 'CategoryController');
Route::get('/categories', 'CategoryController@search')->name('categories.search');

Route::resource('books', 'BookController');
Route::get('/books', 'BookController@search')->name('books.search');

Route::resource('orders', 'OrderController');
Route::get('/orders', 'OrderController@search')->name('orders.search');