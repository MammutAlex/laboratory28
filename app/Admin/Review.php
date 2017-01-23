<?php

use App\Review;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Review::class, function(ModelConfiguration $model) {
	$model->setTitle('Автори');

	// Display
	$model->onDisplay(function() {
		return AdminDisplay::table()->setColumns([
			AdminColumn::image('image')->setLabel('Зображення')->setWidth('100px'),
			AdminColumn::link('title_uk')->setLabel('Відгук'),
		])->paginate(25);
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::textarea('title_en', 'Відгук (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::textarea('title_ru', 'Відгук (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::textarea('title_uk', 'Відгук (uk)')->required(),
					];
				}),
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::text('signature_en', 'Підпис (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('signature_ru', 'Підпис (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('signature_uk', 'Підпис (uk)')->required(),
					];
				}),
			AdminFormElement::image('image', 'Фото')->required()
		);

		return $form;
	});
});
