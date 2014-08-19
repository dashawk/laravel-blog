<?php

class HomeController extends BaseController {

	protected $data;
	
	public function __construct() {
		$this->data['theme'] = 'default';
	}

	public function index() {
		$this->data['posts'] = Post::all();

		return View::make('home.index', $this->data);
	}
}
