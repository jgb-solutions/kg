<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('ServiceTableSeeder');

		// $this->call('UserTableSeeder');
		$this->call('AuthorsTableSeeder');
		$this->command->info('Authors table seeded!');
		$this->call('BooksTableSeeder');
		$this->command->info('Boos table seeded');
	}

}
