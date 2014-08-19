<?php

// Homepage
Route::get('/', 'HomeController@index');

// Admin Area
Route::get('admin', 'AdminController@index');

// For Posts Ajax Manuevers
Route::resource('post', 'PostController');