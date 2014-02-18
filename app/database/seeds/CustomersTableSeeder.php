<?php

class CustomersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('customers')->truncate();

		$customers = array(

		);

		$faker = Faker\Factory::create();

		foreach (range(1, 250) as $value) {
			$customers[] = [
				"firstname" => $faker->firstName,
				"lastname" => $faker->lastName,
				"city" => $faker->city,
				"address" => $faker->address,
				"country" => $faker->country
			];
		}

		// Uncomment the below to run the seeder
		DB::table('customers')->insert($customers);
	}

}
