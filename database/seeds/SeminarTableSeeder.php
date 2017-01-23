<?php

use App\Seminar;
use Illuminate\Database\Seeder;

class SeminarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    factory(Seminar::class, 20)->create();
    }
}
