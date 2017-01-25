<?php

use App\Globals;
use Illuminate\Database\Seeder;

class GlobalsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Globals::create([
			'logo' => 'images/logo.png',

			'twitter'  => '',
			'facebook' => '',
			'linkedin' => '',

			'index_title_en'     => 'Лабораторія супутникових досліджень ближнього космосу',
			'index_title_ru'     => 'Лабораторія супутникових досліджень ближнього космосу',
			'index_title_uk'     => 'Лабораторія супутникових досліджень ближнього космосу',
			'index_sub_title_en' => 'Інститут космічних досліджень',
			'index_sub_title_ru' => 'Інститут космічних досліджень',
			'index_sub_title_uk' => 'Інститут космічних досліджень',

			'index_we_doing_title_en'     => 'Що ми робимо?',
			'index_we_doing_title_ru'     => 'Що ми робимо?',
			'index_we_doing_title_uk'     => 'Що ми робимо?',
			'index_we_doing_sub_title_en' => 'В нашому інституті іоносферні дослідження ведуться переважно в лабораторії супутникових досліджень ближнього космосу.',
			'index_we_doing_sub_title_ru' => 'В нашому інституті іоносферні дослідження ведуться переважно в лабораторії супутникових досліджень ближнього космосу.',
			'index_we_doing_sub_title_uk' => 'В нашому інституті іоносферні дослідження ведуться переважно в лабораторії супутникових досліджень ближнього космосу.',

			'index_news_title_en'     => 'News',
			'index_news_title_ru'     => 'Новости',
			'index_news_title_uk'     => 'Новини',
			'index_news_sub_title_en' => '',
			'index_news_sub_title_ru' => '',
			'index_news_sub_title_uk' => '',
			'index_news_more_en'      => 'More',
			'index_news_more_ru'      => 'More',
			'index_news_more_uk'      => 'More',

			'index_video_watch_en' => 'Watch',
			'index_video_watch_ru' => 'Watch',
			'index_video_watch_uk' => 'Watch',

			'index_about_as_title_en' => 'Наша команда',
			'index_about_as_title_ru' => 'Наша команда',
			'index_about_as_title_uk' => 'Наша команда',

			'index_partner_title_en' => 'Партнери',
			'index_partner_title_ru' => 'Партнери',
			'index_partner_title_uk' => 'Партнери',

			'index_contact_title_en' => 'Contact us',
			'index_contact_title_ru' => 'Contact us',
			'index_contact_title_uk' => 'Contact us',

			'index_contact_phone'      => '044 564 81 15',
			'index_contact_email'      => 'none',
			'index_contact_address_en' => 'Проспект Академіка Глушкова 40,4/1',
			'index_contact_address_ru' => 'Проспект Академіка Глушкова 40,4/1',
			'index_contact_address_uk' => 'Проспект Академіка Глушкова 40,4/1',

			'index_about_title_en' => 'About us',
			'index_about_title_ru' => 'About us',
			'index_about_title_uk' => 'About us',
			'index_about_text_en'  => 'About us',
			'index_about_text_ru'  => 'About us',
			'index_about_text_uk'  => 'About us',

			'about_image'    => 'images/servicePage/bread.jpg',
			'about_title_en' => 'Інформація про лабораторію',
			'about_title_ru' => 'Інформація про лабораторію',
			'about_title_uk' => 'Інформація про лабораторію',

			'seminar_image'    => 'images/servicePage/bread.jpg',
			'seminar_title_en' => 'Саморозвиток лабораторії',
			'seminar_title_ru' => 'Саморозвиток лабораторії',
			'seminar_title_uk' => 'Саморозвиток лабораторії',

			'publication_image'    => 'images/servicePage/bread.jpg',
			'publication_title_en' => 'Публікації лабораторії',
			'publication_title_ru' => 'Публікації лабораторії',
			'publication_title_uk' => 'Публікації лабораторії',

			'lecture_image'    => 'images/servicePage/bread.jpg',
			'lecture_title_en' => 'Лекції',
			'lecture_title_ru' => 'Лекції',
			'lecture_title_uk' => 'Лекції',

			'news_image'    => 'images/servicePage/bread.jpg',
			'news_title_en' => 'Новини',
			'news_title_ru' => 'Новини',
			'news_title_uk' => 'Новини',
		]);
	}
}
