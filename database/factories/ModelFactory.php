<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function(Faker\Generator $faker) {
	static $password;

	return [
		'name'           => $faker->name,
		'email'          => $faker->unique()->safeEmail,
		'password'       => $password ?: $password = bcrypt('secret'),
		'remember_token' => str_random(10),
	];
});
$factory->define(App\News::class, function(Faker\Generator $faker) {
	return [
		'title_en'       => $faker->sentence($nbWords = 6, $variableNbWords = true),
		'title_ru'       => $faker->sentence($nbWords = 6, $variableNbWords = true),
		'title_uk'       => $faker->sentence($nbWords = 6, $variableNbWords = true),
		'description_en' => $faker->text($maxNbChars = 50),
		'description_ru' => $faker->text($maxNbChars = 50),
		'description_uk' => $faker->text($maxNbChars = 50),
		'text_en'        => $faker->text($maxNbChars = 1500),
		'text_ru'        => $faker->text($maxNbChars = 1500),
		'text_uk'        => $faker->text($maxNbChars = 1500),
		'image'          => 'images/newspage/news.jpg',
		'published'      => true,
		'date'           => $faker->date($format = 'Y-m-d', $max = 'now'),
	];
});
