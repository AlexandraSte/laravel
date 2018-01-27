<?php


Route::get('/', 'PageController@page');
Route::get('/product', 'ProductController@product');
Route::get('/order', 'OrderController@order');
