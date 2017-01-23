<?php

use App\Author;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Author::class, function(ModelConfiguration $model) {
	$model->setTitle('Автори');

	// Display
	$model->onDisplay(function() {
		return AdminDisplay::table()->setColumns([
			AdminColumn::image('image')->setLabel('Зображення')->setWidth('100px'),
			AdminColumn::link('name_uk')->setLabel('Імʼя'),
		])->paginate(25);
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::text('name_en', 'Імʼя (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('name_ru', 'Імʼя (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('name_uk', 'Імʼя (uk)')->required(),
					];
				}),
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::text('institute_en', 'Інститут (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('institute_ru', 'Інститут (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('institute_uk', 'Інститут (uk)')->required(),
					];
				}),
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::text('position_en', 'Посада (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('position_ru', 'Посада (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('position_uk', 'Посада (uk)')->required(),
					];
				}),
			AdminFormElement::image('image', 'Фото')->required()
		);

		return $form;
	});
});
