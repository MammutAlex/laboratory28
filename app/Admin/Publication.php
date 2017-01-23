<?php

use App\Publication;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Publication::class, function(ModelConfiguration $model) {
	$model->setTitle('Публікації');

	// Display
	$model->onDisplay(function() {
		return AdminDisplay::table()->setApply(function($query) {
			$query->orderBy('date', 'desc');
		})->setColumns([
			AdminColumn::link('text_uk')->setLabel('Загаловок'),
			AdminColumn::datetime('date')->setLabel('Дата')->setFormat('Y-m-d')->setWidth('150px'),
		])->paginate(25);
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		$form = AdminForm::panel()->addBody(
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
			AdminFormElement::date('date', 'Дата')->required()->setFormat('Y-m-d')
		);

		return $form;
	});
});
