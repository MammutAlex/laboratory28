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
$factory->define(App\Lecture::class, function(Faker\Generator $faker) {
	return [
		'author_id'      => function() {
			return App\Author::inRandomOrder()->first()->id;
		},
		'category_id'    => function() {
			return App\Category::inRandomOrder()->first()->id;
		},
		'title_en'       => $faker->text($maxNbChars = 20),
		'title_ru'       => $faker->text($maxNbChars = 20),
		'title_uk'       => $faker->text($maxNbChars = 20),
		'title2_en'      => $faker->text($maxNbChars = 20),
		'title2_ru'      => $faker->text($maxNbChars = 20),
		'title2_uk'      => $faker->text($maxNbChars = 20),
		'description_en' => $faker->text($maxNbChars = 50),
		'description_ru' => $faker->text($maxNbChars = 50),
		'description_uk' => $faker->text($maxNbChars = 50),
		'text_en'        => $faker->text($maxNbChars = 1500),
		'text_ru'        => $faker->text($maxNbChars = 1500),
		'text_uk'        => $faker->text($maxNbChars = 1500),
		'text2_en'       => $faker->text($maxNbChars = 1500),
		'text2_ru'       => $faker->text($maxNbChars = 1500),
		'text2_uk'       => $faker->text($maxNbChars = 1500),
		'image'          => 'images/newspage/news.jpg',
		'video'          => 'http://player.vimeo.com/video/38409143',
		'published'      => true,
		'date'           => $faker->date($format = 'Y-m-d', $max = 'now'),
	];
});
$factory->define(App\Author::class, function(Faker\Generator $faker) {
	return [
		'name_en'      => $faker->name,
		'name_ru'      => $faker->name,
		'name_uk'      => $faker->name,
		'institute_en' => $faker->company,
		'institute_ru' => $faker->company,
		'institute_uk' => $faker->company,
		'position_en'  => $faker->text($maxNbChars = 10),
		'position_ru'  => $faker->text($maxNbChars = 10),
		'position_uk'  => $faker->text($maxNbChars = 10),
		'image'        => 'images/newspage/news.jpg',
	];
});
$factory->define(App\Seminar::class, function(Faker\Generator $faker) {
	return [
		'author_id'      => function() {
			return App\Author::inRandomOrder()->first()->id;
		},
		'title_en'       => $faker->text($maxNbChars = 20),
		'title_ru'       => $faker->text($maxNbChars = 20),
		'title_uk'       => $faker->text($maxNbChars = 20),
		'title2_en'      => $faker->text($maxNbChars = 20),
		'title2_ru'      => $faker->text($maxNbChars = 20),
		'title2_uk'      => $faker->text($maxNbChars = 20),
		'description_en' => $faker->text($maxNbChars = 50),
		'description_ru' => $faker->text($maxNbChars = 50),
		'description_uk' => $faker->text($maxNbChars = 50),
		'text_en'        => $faker->text($maxNbChars = 1500),
		'text_ru'        => $faker->text($maxNbChars = 1500),
		'text_uk'        => $faker->text($maxNbChars = 1500),
		'text2_en'       => $faker->text($maxNbChars = 1500),
		'text2_ru'       => $faker->text($maxNbChars = 1500),
		'text2_uk'       => $faker->text($maxNbChars = 1500),
		'image'          => 'images/newspage/news.jpg',
		'video'          => 'http://player.vimeo.com/video/38409143',
		'published'      => true,
		'date'           => $faker->date($format = 'Y-m-d', $max = 'now'),
	];
});
$factory->define(App\Category::class, function(Faker\Generator $faker) {
	return [
		'title_en' => $faker->company,
		'title_ru' => $faker->company,
		'title_uk' => $faker->company,
	];
});
