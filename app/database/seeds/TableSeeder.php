<?php

	class TableSeeder extends Seeder {
		public function run() {
			$seedUsers = DB::table('users')->insert([
				'username' => 'admin',
				'password' => Hash::make('admin'),
				'firstname' => 'Administrator',
				'lastname' => '',
				'email' => 'admin@localhost',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]);

			$seedPosts = DB::table('posts')->insert([
				'title' => 'Sample Post',
				'body' 	=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type 
							specimen book. It has survived not only five centuries, but also the leap into 
							electronic typesetting, remaining essentially unchanged.',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]);

			DB::table('posts')->insert([
				'title' => 'Lorem Ipsum Dolor',
				'body' 	=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type 
							specimen book. It has survived not only five centuries, but also the leap into 
							electronic typesetting, remaining essentially unchanged.',
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
			]);
		}
	}