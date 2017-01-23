<?php

use App\IndexImage;
use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IndexImage::create(['image'=>'images/slider/slider.jpg']);
        IndexImage::create(['image'=>'images/slider/slider1.jpg']);
    }
}
