<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Article;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		//$this->call('ArticleTableSeed');
		$faker = Faker\Factory::create();
		for($i = 0; $i < 100; $i++) {
			Article::create([
				'title'	=>	$faker->sentence,
				'content'	=>	implode('', $faker->paragraphs(4))
			]);
		}
	}

}
