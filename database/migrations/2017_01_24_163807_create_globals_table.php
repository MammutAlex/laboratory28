<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('globals', function(Blueprint $table) {
			$table->increments('id');

			$table->string('logo');

			$table->string('twitter');
			$table->string('facebook');
			$table->string('linkedin');

			$table->string('index_title_en');
			$table->string('index_title_ru');
			$table->string('index_title_uk');
			$table->string('index_sub_title_en');
			$table->string('index_sub_title_ru');
			$table->string('index_sub_title_uk');

			$table->string('index_we_doing_title_en');
			$table->string('index_we_doing_title_ru');
			$table->string('index_we_doing_title_uk');
			$table->string('index_we_doing_sub_title_en');
			$table->string('index_we_doing_sub_title_ru');
			$table->string('index_we_doing_sub_title_uk');

			$table->string('index_news_title_en');
			$table->string('index_news_title_ru');
			$table->string('index_news_title_uk');
			$table->string('index_news_sub_title_en');
			$table->string('index_news_sub_title_ru');
			$table->string('index_news_sub_title_uk');
			$table->string('index_news_more_en');
			$table->string('index_news_more_ru');
			$table->string('index_news_more_uk');

			$table->string('index_video_watch_en');
			$table->string('index_video_watch_ru');
			$table->string('index_video_watch_uk');

			$table->string('index_about_as_title_en');
			$table->string('index_about_as_title_ru');
			$table->string('index_about_as_title_uk');

			$table->string('index_partner_title_en');
			$table->string('index_partner_title_ru');
			$table->string('index_partner_title_uk');

			$table->string('index_contact_title_en');
			$table->string('index_contact_title_ru');
			$table->string('index_contact_title_uk');

			$table->string('index_contact_phone');
			$table->string('index_contact_email');
			$table->string('index_contact_address_en');
			$table->string('index_contact_address_ru');
			$table->string('index_contact_address_uk');

			$table->string('index_about_title_en');
			$table->string('index_about_title_ru');
			$table->string('index_about_title_uk');
			$table->string('index_about_text_en');
			$table->string('index_about_text_ru');
			$table->string('index_about_text_uk');

			$table->string('about_image');
			$table->string('about_title_en');
			$table->string('about_title_ru');
			$table->string('about_title_uk');

			$table->string('seminar_image');
			$table->string('seminar_title_en');
			$table->string('seminar_title_ru');
			$table->string('seminar_title_uk');

			$table->string('publication_image');
			$table->string('publication_title_en');
			$table->string('publication_title_ru');
			$table->string('publication_title_uk');

			$table->string('lecture_image');
			$table->string('lecture_title_en');
			$table->string('lecture_title_ru');
			$table->string('lecture_title_uk');

			$table->string('news_image');
			$table->string('news_title_en');
			$table->string('news_title_ru');
			$table->string('news_title_uk');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('globals');
	}
}
