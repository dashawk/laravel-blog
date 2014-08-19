<?php

class PostController extends BaseController {

	/** -------------------------------------
	 * Attribute that holds the Post Instance
	 * -------------------------------------- */
	protected $post;

	/** ---------------------------------------
	 * Initialize Post instance in an attribute
	 * inside the contructor
	 * ---------------------------------------- */
	public function __construct(Post $post) {
		$this->post = $post;
	}

	/** ----------------
	 * Returns all Posts
	 * @return Object
	 * ----------------- */
	public function index() {
		return $this->post->all();
	}


	/** -------
	 * Not Used
	 * -------- */
	public function create() {
		//
	}


	/** ---------------
	 * Store a new Post
	 * ---------------- */
	public function store() {
		//
	}


	/** -------------------------
	 * Returns the specified post.
	 * Also used for editing
	 * -------------------------- */
	public function show($id)
	{
		//
	}


	/** -------
	 * Not Used
	 * -------- */
	public function edit($id)
	{
		//
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
