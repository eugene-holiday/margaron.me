<?php

use Margaron\Pages\Page;
use Faker\Factory as Faker;

class PagesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Page::create([
                'slug' => $faker->md5,
                'title' => $faker->sentence(6),
                'content' => $faker->paragraph(mt_rand(5, 16))
			]);
		}
	}

}