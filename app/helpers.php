<?php

	if(!function_exists('blogUrl')) {
		function blogUrl($title, $restore = false) {
			if(!$restore) {
				return strtolower(str_replace(' ', '-', $title));
			} else {
				return strtolower(str_replace('-', ' ', $title));
			}
		}
	}

	if(!function_exists('dlist')) {
		function dlist($data, $table, $field) {
			$collection = [];

			foreach ($data as $item) {
				$collection[$item->{$table . '_id'}] = $item->{$field};
			}

			return $collection;
		}
	}