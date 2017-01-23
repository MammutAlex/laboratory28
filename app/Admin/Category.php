<?php

use App\Category;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Category::class, function(ModelConfiguration $model) {
	$model->setTitle('Курси');

	// Display
	$model->onDisplay(function() {
		return AdminDisplay::table()->setColumns([
			AdminColumn::link('title_uk')->setLabel('Назва'),
		])->paginate(25);
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::text('title_en', 'Назва (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('title_ru', 'Назва (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('title_uk', 'Назва (uk)')->required(),
					];
				})
		);

		return $form;
	});
});
