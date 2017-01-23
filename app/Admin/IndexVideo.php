<?php

use App\IndexImage;
use App\IndexVideo;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(IndexVideo::class, function(ModelConfiguration $model) {
	$model->setTitle('Відео');

	// Display
	$model->onDisplay(function() {
		$display = AdminDisplay::table()->setColumns([
			AdminColumn::image('image')->setLabel('Image')
				->setWidth('100px'),
			AdminColumn::link('title_uk')->setLabel('Заголовок')->setWidth('400px'),
		]);

		$display->paginate(15);

		return $display;
	});

	$model->disableCreating();
	$model->disableDeleting();
	$model->onEdit(function() {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::text('video', 'Посилання на youtube')
		);
		$form->setItems(
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

		return $form;
	});
});