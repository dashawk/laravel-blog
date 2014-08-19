<?php

class CategoryController extends \BaseController {

	protected $data;

	public function __construct() {
		$this->data['theme'] = 'default';
	}

	public function index($id = 0, $title = '') {
		$post = Category::find(2);
		return $post->post();

		// $this->data['post'] = Post::where('title', 'LIKE', strtolower(blogUrl($title, true)))->first();
		
		// $category = $this->data['post']->category;

		// $this->data['category_name'] = isset($category[0]) ? $category[0]->category_name : 'No Category';

		// return View::make('home.post', $this->data);
	}
}
