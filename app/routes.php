<?php

// Homepage
Route::get('/', 'HomeController@index');

// Show post by Category
Route::get('category/{cat_id}/{post_title}', 'CategoryController@index');

// RESTful resouce
Route::resource('post', 'PostController');

// Route::get('test', function() {
// 	$post = Category::find(2);
// 	$post->post()->attach(7);
// 	return $post->posts;
// });