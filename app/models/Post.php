<?php

	class Post extends Eloquent {

		protected $table = 'posts';

		protected $fillable = [ 'title', 'body' ];

		protected $primaryKey = 'post_id';

		public function category() {
			return $this->belongsToMany('Category', 'post_category', 'category_id', 'post_id');
		}
	}