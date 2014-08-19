<?php

class PostController extends BaseController {
	/** -------------------------------------
	 * Attribute that holds the Post Instance
	 * -------------------------------------- */
	protected $post;

	/** ---------------------------------------------
	 * Attribute that holds all variables in the view
	 * ---------------------------------------------- */
	protected $data;

	/** ---------------------------------------
	 * Initialize Post instance in an attribute
	 * inside the contructor
	 * ---------------------------------------- */
	public function __construct(Post $post) {
		$this->post = $post;
		$this->data['theme'] = 'default';
	}

	/** ----------------
	 * Returns all Posts
	 * @return Object
	 * ----------------- */
	public function index() {
		return Redirect::to('/');
	}


	/** -------
	 * Not Used
	 * -------- */
	public function create() {
		return 'create post';
	}


	/** ---------------
	 * Store a new Post
	 * ---------------- */
	public function store() {
		$post = new Post;
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();

		$post->category()->sync([
			Input::get('category_id'), $post->post_id
		]);
	}


	/** -------------------------
	 * Returns the specified post.
	 * Also used for editing
	 * -------------------------- */
	public function show($title) {
		$this->data['post'] = Post::where('title', 'LIKE', strtolower(blogUrl($title, true)))->first();
		
		$category = $this->data['post']->category;

		$this->data['category_name'] = isset($category[0]) ? $category[0]->category_name : 'No Category';

		return View::make('home.post', $this->data);
	}


	/** -------
	 * Not Used
	 * -------- */
	public function edit($id) {
		$post = Post::find($id);

		return Response::json([ 'data' => $post ]);
	}


	/** ------------------------
	 * Update the specified post.
	 * ------------------------- */
	public function update($id)
	{
		//
	}


	/** ------------------------
	 * Remove the specified post.
	 * ------------------------- */
	public function destroy($id)
	{
		//
	}


}
