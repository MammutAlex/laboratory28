<?php

use App\Lecture;
use Illuminate\Database\Seeder;

class LectureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    factory(Lecture::class, 20)->create();
    }
}
