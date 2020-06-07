<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', 'ProductController@viewIndex')->name('products');
Route::get('/product/{id}', 'ProductController@viewProduct')->name('product');

Route::post('/cart/toggle/{productId}', 'CartController@toggle')->where('productId', '[0-9]+')->name('cart');
