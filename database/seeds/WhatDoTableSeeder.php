<?php

use App\WhatDo;
use Illuminate\Database\Seeder;

class WhatDoTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		WhatDo::create([
			'image'   => 'images/blog/author2.jpg',
			'text_uk' => 'Обробка та аналіз даних супутникових спостережень, спрямованих на вивчення іоносфери–серії проектів НАСА “Atmosphere Explorer” та “Dynamics Explorer”, серії експериментів на українських апаратах “Січ”, французького DEMETER та інше',
			'text_ru' => 'Обработка и анализ данных спутниковых наблюдений, направленных на изучение ионосферы-серии проектов НАСА "Atmosphere Explorer" и "Dynamics Explorer", серии экспериментов на украинском аппаратах "Сич", французского DEMETER и прочее',
			'text_en' => 'Processing and analysis of satellite observations aimed at studying the ionosphere series of NASA projects "Atmosphere Explorer" and "Dynamics Explorer", a series of experiments on the Ukrainian vehicles "Sich", French DEMETER, etc.',
		]);
		WhatDo::create([
			'image'   => 'images/blog/author2.jpg',
			'text_uk' => 'Теоретичне дослідження динамічних процесів в верхній атмосфері та іоносфері Землі – атмосферних гравітаційних хвиль, магнітогідродинамічних хвиль, радіочастотних плазмових емісій та інше',
			'text_ru' => 'Теоретическое исследование динамических процессов в верхней атмосфере и ионосфере Земли - атмосферных гравитационных волн, магнитогидродинамических волн, радиочастотных плазменных эмиссий и прочее',
			'text_en' => 'Theoretical study of dynamic processes in the upper atmosphere and ionosphere - atmospheric gravity waves, magnetohydrodynamic waves, radio frequency plasma emission, etc.',
		]);
		WhatDo::create([
			'image'   => 'images/blog/author2.jpg',
			'text_uk' => 'Підготовка та здійснення національних проектів в галузі досліджень ближнього космосу – проектів “Варіант”, “Потенціал”, “Іоносат” та інше',
			'text_ru' => 'Подготовка и осуществление национальных проектов в области исследований ближнего космоса - проектов "Вариант", "Потенциал", "Ионосат" и прочее',
			'text_en' => 'Preparation and implementation of national projects in the research of near space - projects "Version", "potential", "Ionosat", etc.',
		]);
	}
}
