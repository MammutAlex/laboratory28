<?php

use App\About;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		About::create([
			'title_en' => 'General Information',
			'title_ru' => 'Общие сведения',
			'title_uk' => 'Загальні відомості',
			'text_en'  => '
							<p>
                                Duis semper velit mi, vitae pulvinar mauris sollicitudin porttitor. 
                                Nam ornare turpis tincidunt, tincidunt metus pharetra, auctor quam.
                                Nulla condimentum ut metus at sodales.
                            </p>
                            <h5 class="secondHead">
                                Suspendisse bibendum elementum rhoncus.
                            </h5>
                            <p class="specialPara">
                                <span class="ttlLine"></span>
                                Morbi id mi ante. Pellentesque habitant morbi tristique senectus et 
                                netus et malesuada fames ac turpis egestas.
                            </p>
                            <p>
                                Proin luctus porta blandit. Vestibulum consequat fringilla ligula. 
                                Pellentesque consectetur mauris eros. <a href="#">Praesent tincidunt</a>, ex non 
                                lobortis fringilla, mauris ligula euismod risus, eu vehicula justo 
                                nulla sit amet lorem. Nunc sit amet volutpat eros. Fusce ut urna 
                                rutrum, pellentesque libero non, mollis ex. Aenean elementum, 
                                lorem ut hendrerit ornare.
                            </p>
							',
			'text_ru'  => '
							<p>
                                Duis semper velit mi, vitae pulvinar mauris sollicitudin porttitor. 
                                Nam ornare turpis tincidunt, tincidunt metus pharetra, auctor quam.
                                Nulla condimentum ut metus at sodales.
                            </p>
                            <h5 class="secondHead">
                                Suspendisse bibendum elementum rhoncus.
                            </h5>
                            <p class="specialPara">
                                <span class="ttlLine"></span>
                                Morbi id mi ante. Pellentesque habitant morbi tristique senectus et 
                                netus et malesuada fames ac turpis egestas.
                            </p>
                            <p>
                                Proin luctus porta blandit. Vestibulum consequat fringilla ligula. 
                                Pellentesque consectetur mauris eros. <a href="#">Praesent tincidunt</a>, ex non 
                                lobortis fringilla, mauris ligula euismod risus, eu vehicula justo 
                                nulla sit amet lorem. Nunc sit amet volutpat eros. Fusce ut urna 
                                rutrum, pellentesque libero non, mollis ex. Aenean elementum, 
                                lorem ut hendrerit ornare.
                            </p>
							',
			'text_uk'  => '
							<p>
                                Duis semper velit mi, vitae pulvinar mauris sollicitudin porttitor. 
                                Nam ornare turpis tincidunt, tincidunt metus pharetra, auctor quam.
                                Nulla condimentum ut metus at sodales.
                            </p>
                            <h5 class="secondHead">
                                Suspendisse bibendum elementum rhoncus.
                            </h5>
                            <p class="specialPara">
                                <span class="ttlLine"></span>
                                Morbi id mi ante. Pellentesque habitant morbi tristique senectus et 
                                netus et malesuada fames ac turpis egestas.
                            </p>
                            <p>
                                Proin luctus porta blandit. Vestibulum consequat fringilla ligula. 
                                Pellentesque consectetur mauris eros. <a href="#">Praesent tincidunt</a>, ex non 
                                lobortis fringilla, mauris ligula euismod risus, eu vehicula justo 
                                nulla sit amet lorem. Nunc sit amet volutpat eros. Fusce ut urna 
                                rutrum, pellentesque libero non, mollis ex. Aenean elementum, 
                                lorem ut hendrerit ornare.
                            </p>
							',
		]);
		About::create([
			'title_en' => 'Historical Background',
			'title_ru' => 'Историческая справка',
			'title_uk' => 'Історична довідка',
			'text_en'  => '
							<p>
                                Duis semper velit mi, vitae pulvinar mauris sollicitudin porttitor. 
                                Nam ornare turpis tincidunt, tincidunt metus pharetra, auctor quam.
                                Nulla condimentum ut metus at sodales.
                            </p>
                            <h5 class="secondHead">
                                Suspendisse bibendum elementum rhoncus.
                            </h5>
                            <p class="specialPara">
                                <span class="ttlLine"></span>
                                Morbi id mi ante. Pellentesque habitant morbi tristique senectus et 
                                netus et malesuada fames ac turpis egestas.
                            </p>
                            <p>
                                Proin luctus porta blandit. Vestibulum consequat fringilla ligula. 
                                Pellentesque consectetur mauris eros. <a href="#">Praesent tincidunt</a>, ex non 
                                lobortis fringilla, mauris ligula euismod risus, eu vehicula justo 
                                nulla sit amet lorem. Nunc sit amet volutpat eros. Fusce ut urna 
                                rutrum, pellentesque libero non, mollis ex. Aenean elementum, 
                                lorem ut hendrerit ornare.
                            </p>
							',
			'text_ru'  => '
							<p>
                                Duis semper velit mi, vitae pulvinar mauris sollicitudin porttitor. 
                                Nam ornare turpis tincidunt, tincidunt metus pharetra, auctor quam.
                                Nulla condimentum ut metus at sodales.
                            </p>
                            <h5 class="secondHead">
                                Suspendisse bibendum elementum rhoncus.
                            </h5>
                            <p class="specialPara">
                                <span class="ttlLine"></span>
                                Morbi id mi ante. Pellentesque habitant morbi tristique senectus et 
                                netus et malesuada fames ac turpis egestas.
                            </p>
                            <p>
                                Proin luctus porta blandit. Vestibulum consequat fringilla ligula. 
                                Pellentesque consectetur mauris eros. <a href="#">Praesent tincidunt</a>, ex non 
                                lobortis fringilla, mauris ligula euismod risus, eu vehicula justo 
                                nulla sit amet lorem. Nunc sit amet volutpat eros. Fusce ut urna 
                                rutrum, pellentesque libero non, mollis ex. Aenean elementum, 
                                lorem ut hendrerit ornare.
                            </p>
							',
			'text_uk'  => '
							<p>
                                Duis semper velit mi, vitae pulvinar mauris sollicitudin porttitor. 
                                Nam ornare turpis tincidunt, tincidunt metus pharetra, auctor quam.
                                Nulla condimentum ut metus at sodales.
                            </p>
                            <h5 class="secondHead">
                                Suspendisse bibendum elementum rhoncus.
                            </h5>
                            <p class="specialPara">
                                <span class="ttlLine"></span>
                                Morbi id mi ante. Pellentesque habitant morbi tristique senectus et 
                                netus et malesuada fames ac turpis egestas.
                            </p>
                            <p>
                                Proin luctus porta blandit. Vestibulum consequat fringilla ligula. 
                                Pellentesque consectetur mauris eros. <a href="#">Praesent tincidunt</a>, ex non 
                                lobortis fringilla, mauris ligula euismod risus, eu vehicula justo 
                                nulla sit amet lorem. Nunc sit amet volutpat eros. Fusce ut urna 
                                rutrum, pellentesque libero non, mollis ex. Aenean elementum, 
                                lorem ut hendrerit ornare.
                            </p>
							',
		]);
		About::create([
			'title_en' => 'Learning and learning',
			'title_ru' => 'Учим и учимся',
			'title_uk' => 'Вчимо та вчимося',
			'text_en'  => '
							<p>
                                Duis semper velit mi, vitae pulvinar mauris sollicitudin porttitor. 
                                Nam ornare turpis tincidunt, tincidunt metus pharetra, auctor quam.
                                Nulla condimentum ut metus at sodales.
                            </p>
                            <h5 class="secondHead">
                                Suspendisse bibendum elementum rhoncus.
                            </h5>
                            <p class="specialPara">
                                <span class="ttlLine"></span>
                                Morbi id mi ante. Pellentesque habitant morbi tristique senectus et 
                                netus et malesuada fames ac turpis egestas.
                            </p>
                            <p>
                                Proin luctus porta blandit. Vestibulum consequat fringilla ligula. 
                                Pellentesque consectetur mauris eros. <a href="#">Praesent tincidunt</a>, ex non 
                                lobortis fringilla, mauris ligula euismod risus, eu vehicula justo 
                                nulla sit amet lorem. Nunc sit amet volutpat eros. Fusce ut urna 
                                rutrum, pellentesque libero non, mollis ex. Aenean elementum, 
                                lorem ut hendrerit ornare.
                            </p>
							',
			'text_ru'  => '
							<p>
                                Duis semper velit mi, vitae pulvinar mauris sollicitudin porttitor. 
                                Nam ornare turpis tincidunt, tincidunt metus pharetra, auctor quam.
                                Nulla condimentum ut metus at sodales.
                            </p>
                            <h5 class="secondHead">
                                Suspendisse bibendum elementum rhoncus.
                            </h5>
                            <p class="specialPara">
                                <span class="ttlLine"></span>
                                Morbi id mi ante. Pellentesque habitant morbi tristique senectus et 
                                netus et malesuada fames ac turpis egestas.
                            </p>
                            <p>
                                Proin luctus porta blandit. Vestibulum consequat fringilla ligula. 
                                Pellentesque consectetur mauris eros. <a href="#">Praesent tincidunt</a>, ex non 
                                lobortis fringilla, mauris ligula euismod risus, eu vehicula justo 
                                nulla sit amet lorem. Nunc sit amet volutpat eros. Fusce ut urna 
                                rutrum, pellentesque libero non, mollis ex. Aenean elementum, 
                                lorem ut hendrerit ornare.
                            </p>
							',
			'text_uk'  => '
							<p>
                                Duis semper velit mi, vitae pulvinar mauris sollicitudin porttitor. 
                                Nam ornare turpis tincidunt, tincidunt metus pharetra, auctor quam.
                                Nulla condimentum ut metus at sodales.
                            </p>
                            <h5 class="secondHead">
                                Suspendisse bibendum elementum rhoncus.
                            </h5>
                            <p class="specialPara">
                                <span class="ttlLine"></span>
                                Morbi id mi ante. Pellentesque habitant morbi tristique senectus et 
                                netus et malesuada fames ac turpis egestas.
                            </p>
                            <p>
                                Proin luctus porta blandit. Vestibulum consequat fringilla ligula. 
                                Pellentesque consectetur mauris eros. <a href="#">Praesent tincidunt</a>, ex non 
                                lobortis fringilla, mauris ligula euismod risus, eu vehicula justo 
                                nulla sit amet lorem. Nunc sit amet volutpat eros. Fusce ut urna 
                                rutrum, pellentesque libero non, mollis ex. Aenean elementum, 
                                lorem ut hendrerit ornare.
                            </p>
							',
		]);
	}
}
