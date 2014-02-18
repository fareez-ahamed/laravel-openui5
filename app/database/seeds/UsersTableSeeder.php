<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$users = [];

		$faker = Faker\Factory::create();

		foreach (range(1,200) as $value) {
			$users[] = [
				"username" => $faker->unique()->userName,
				"email" => $faker->unique()->email,
				"firstname" => $faker->firstName,
				"lastname" => $faker->lastName,
				"city" => $faker->city
			];
		}

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}
