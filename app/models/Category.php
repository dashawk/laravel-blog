<?php

	class Category extends Eloquent {

		protected $table = 'category';

		protected $primaryKey = 'category_id';

		public function post() {
			return $this->belongsToMany('Post', 'post_category', 'category_id', 'post_id');
		}
	}