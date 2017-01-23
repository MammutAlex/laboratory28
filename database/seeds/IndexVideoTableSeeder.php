<?php

use App\IndexVideo;
use Illuminate\Database\Seeder;

class IndexVideoTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		IndexVideo::create([
			'title_en' => 'Big plans',
			'title_ru' => 'Большие планы',
			'title_uk' => 'Великі плани',
			'video'    => 'https://youtu.be/k1Dt4YvQwTM',
		]);
	}
}
