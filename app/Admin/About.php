<?php

use App\About;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(About::class, function(ModelConfiguration $model) {
	$model->setTitle('Відео');

	// Display
	$model->onDisplay(function() {
		$display = AdminDisplay::table()->setColumns([
			AdminColumn::link('title_uk')->setLabel('Заголовок')->setWidth('400px'),
		]);

		$display->paginate(15);

		return $display;
	});

	$model->onCreateAndEdit(function() {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::text('title_uk', 'Заголовок (uk)'),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('title_en', 'Заголовок (en)'),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('title_ru', 'Заголовок (ru)'),
					];
				})
		);
		$form->setItems(
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::wysiwyg('text_en', 'Текст (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::wysiwyg('text_ru', 'Текст (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::wysiwyg('text_uk', 'Текст (uk)')->required(),
					];
				})
		);

		return $form;
	});
});