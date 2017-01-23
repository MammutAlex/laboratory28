<?php

use App\Team;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Team::class, function(ModelConfiguration $model) {
	$model->setTitle('Команда');

	// Display
	$model->onDisplay(function() {
		return AdminDisplay::table()->setColumns([
			AdminColumn::image('image')->setLabel('Зображення')->setWidth('100px'),
			AdminColumn::link('first_name_uk')->setLabel('Імʼя'),
			AdminColumn::link('last_name_uk')->setLabel('Прізвище'),
			AdminColumn::link('position_uk')->setLabel('Посада'),
		])->paginate(25);
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::text('first_name_uk', 'Імʼя (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('first_name_ru', 'Імʼя (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('first_name_uk', 'Імʼя (uk)')->required(),
					];
				}),
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::text('last_name_uk', 'Прізвище (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('last_name_ru', 'Прізвище (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('last_name_uk', 'Прізвище (uk)')->required(),
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
