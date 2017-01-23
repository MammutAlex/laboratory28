<?php

use App\Quote;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Quote::class, function(ModelConfiguration $model) {
	$model->setTitle('Цитати');

	// Display
	$model->onDisplay(function() {
		return AdminDisplay::table()->setColumns([
			AdminColumn::image('image')->setLabel('Зображення')->setWidth('100px'),
			AdminColumn::link('title_uk')->setLabel('Заголовок'),
			AdminColumn::link('text_uk')->setLabel('Текст'),
		])->paginate(25);
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::text('title_en', 'Заголовок (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('title_ru', 'Заголовок (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('title_uk', 'Заголовок (uk)')->required(),
					];
				}),
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::textarea('text_en', 'Текст (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::textarea('text_ru', 'Текст (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::textarea('text_uk', 'Текст (uk)')->required(),
					];
				}),
			AdminFormElement::image('image', 'Фото')->required()
		);

		return $form;
	});
});
