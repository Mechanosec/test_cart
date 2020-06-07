<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProductController@viewIndex')->name('index');
Route::get('/products', 'ProductController@viewIndex')->name('sorting');
Route::get('/product/{id}', 'ProductController@viewProduct')->name('product');
