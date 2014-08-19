Laravel Blog
============

This is a simple Laravel Blog Application.

Requirements
------------

1. PHP 5.4 or Higher

Database
========

To create the database, run this code in your terminal:

	php artisan migrate --seed
	
This will create the datababse for you and then populate the tables with sample records.

Documentation
=============

This app is using the built-in Blade Template. In the views folder you will see the template folder. This folder handles the templating of the whole site.

In the routes.php, you will see 3 routes listed, each route is commented and is self explanatory. I use RESTful resource provided by [Laravel](http://laravel.com)
for the posts.

This project only uses 3 controllers:
	
	HomeController.php - This controller handles the homepage
	PostController.php - This controller handles the posts (  more likely CRUD but not CRUD )
	CategoryController.php - This handles the posts by category
	
I only used 2 models in this project namely:

	Post.php
	Category.php

I keep the controllers and the models as slim as possible though I had a hard time dealing with relations in Eloquent.