<?php

use App\Globals;
use App\IndexImage;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Globals::class, function(ModelConfiguration $model) {
	$model->setTitle('Настройки сайту');

	// Display
	$model->onDisplay(function() {
		$display = AdminDisplay::table()->setColumns([
			AdminColumn::image('logo')->setLabel('Image')->setWidth('100px')
		]);

		return $display;
	});
	$model->disableCreating();
	$model->disableDeleting();
	$model->onEdit(function() {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::image('logo', 'Image')->required(),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::text('index_title_en', 'Заголовок на головній (en)')->required(),
				])->addColumn([
					AdminFormElement::text('index_title_ru', 'Заголовок на головній (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('index_title_uk', 'Заголовок на головній (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::text('index_sub_title_en', 'Під-заголовок на головній (en)')->required(),
				])->addColumn([
					AdminFormElement::text('index_sub_title_ru', 'Під-заголовок на головній (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('index_sub_title_uk', 'Під-заголовок на головній (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::text('index_we_doing_title_en', 'Заголовок ми робимо на головній (en)')->required(),
				])->addColumn([
					AdminFormElement::text('index_we_doing_title_ru', 'Заголовок ми робимо на головній (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('index_we_doing_title_uk', 'Заголовок ми робимо на головній (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::textarea('index_we_doing_sub_title_en', 'Під-заголовок ми робимо на головній (en)')->required(),
				])->addColumn([
					AdminFormElement::textarea('index_we_doing_sub_title_ru', 'Під-заголовок ми робимо на головній (ru)')->required(),
				])->addColumn([
					AdminFormElement::textarea('index_we_doing_sub_title_uk', 'Під-заголовок ми робимо на головній (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::text('index_news_title_en', 'Заголовок новини на головній (en)')->required(),
				])->addColumn([
					AdminFormElement::text('index_news_title_ru', 'Заголовок новини на головній (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('index_news_title_uk', 'Заголовок новини на головній (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::text('index_news_sub_title_en', 'Під-заголовок новини на головній (en)')->required(),
				])->addColumn([
					AdminFormElement::text('index_news_sub_title_ru', 'Під-заголовок новини на головній (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('index_news_sub_title_uk', 'Під-заголовок новини на головній (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::text('index_news_more_en', 'Більше новин на головній (en)')->required(),
				])->addColumn([
					AdminFormElement::text('index_news_more_ru', 'Більше новин на головній (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('index_news_more_uk', 'Більше новин на головній (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::text('index_video_watch_en', 'Переглянути відео на головній (en)')->required(),
				])->addColumn([
					AdminFormElement::text('index_video_watch_ru', 'Переглянути відео на головній (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('index_video_watch_uk', 'Переглянути відео на головній (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::text('index_about_as_title_en', 'Наша команда на головній (en)')->required(),
				])->addColumn([
					AdminFormElement::text('index_about_as_title_ru', 'Наша команда на головній (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('index_about_as_title_uk', 'Наша команда на головній (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::text('index_partner_title_en', 'Наші партнери на головній (en)')->required(),
				])->addColumn([
					AdminFormElement::text('index_partner_title_ru', 'Наші партнери на головній (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('index_partner_title_uk', 'Наші партнери на головній (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::text('index_contact_title_en', 'Контакти на головній (en)')->required(),
				])->addColumn([
					AdminFormElement::text('index_contact_title_ru', 'Контакти на головній (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('index_contact_title_uk', 'Контакти на головній (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::text('index_contact_phone', 'Контактний телефон')->required(),
				])->addColumn([
					AdminFormElement::text('index_contact_email', 'Контактний email')->required(),
				])->addColumn([
					AdminFormElement::text('index_contact_address_en', 'Контактний адрес (en)')->required(),
					AdminFormElement::text('index_contact_address_ru', 'Контактний адрес (ru)')->required(),
					AdminFormElement::text('index_contact_address_uk', 'Контактний адрес (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::text('index_about_title_en', 'Про нас(en)')->required(),
				])->addColumn([
					AdminFormElement::text('index_about_title_ru', 'Про нас(ru)')->required(),
				])->addColumn([
					AdminFormElement::text('index_about_title_uk', 'Про нас(uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::textarea('index_about_text_en', 'Про нас текст (en)')->required(),
				])->addColumn([
					AdminFormElement::textarea('index_about_text_ru', 'Про нас текст (ru)')->required(),
				])->addColumn([
					AdminFormElement::textarea('index_about_text_uk', 'Про нас текст (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::image('about_image', 'Про нас картинка')->required(),
				])->addColumn([
					AdminFormElement::text('about_title_en', 'Про нас сторінка (en)')->required(),
				])->addColumn([
					AdminFormElement::text('about_title_ru', 'Про нас сторінка (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('about_title_uk', 'Про нас сторінка (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::image('seminar_image', 'Семінари картинка')->required(),
				])->addColumn([
					AdminFormElement::text('seminar_title_en', 'Семінари сторінка (en)')->required(),
				])->addColumn([
					AdminFormElement::text('seminar_title_ru', 'Семінари сторінка (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('seminar_title_uk', 'Семінари сторінка (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::image('publication_image', 'Публікації картинка')->required(),
				])->addColumn([
					AdminFormElement::text('publication_title_en', 'Сторінка сторінка (en)')->required(),
				])->addColumn([
					AdminFormElement::text('publication_title_ru', 'Сторінка сторінка (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('publication_title_uk', 'Сторінка сторінка (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::image('lecture_image', 'Лекції картинка')->required(),
				])->addColumn([
					AdminFormElement::text('lecture_title_en', 'Лекції сторінка (en)')->required(),
				])->addColumn([
					AdminFormElement::text('lecture_title_ru', 'Лекції сторінка (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('lecture_title_uk', 'Лекції сторінка (uk)')->required(),
				]),
			AdminFormElement::columns()
				->addColumn([
					AdminFormElement::image('news_image', 'Новини картинка')->required(),
				])->addColumn([
					AdminFormElement::text('news_title_en', 'Новини сторінка (en)')->required(),
				])->addColumn([
					AdminFormElement::text('news_title_ru', 'Новини сторінка (ru)')->required(),
				])->addColumn([
					AdminFormElement::text('news_title_uk', 'Новини сторінка (uk)')->required(),
				])
		);

		return $form;
	});
});