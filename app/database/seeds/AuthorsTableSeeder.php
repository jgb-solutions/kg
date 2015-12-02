<?php

class AuthorsTableSeeder extends Seeder
{
	public function up()
	{
		// DB::table('authors')->delete();

		Author::create(array(
			'name' => 'Lauren',
			'surname' => 'Olivier'
		));

		Author::create(array(
			'name' => 'Stephenie',
			'surname' => 'Meyer'
		));

		Author::create(array(
			'name' => 'Dan',
			'surname' => 'Brown'
		));
	}
}