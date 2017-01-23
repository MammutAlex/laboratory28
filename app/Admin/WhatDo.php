<?php

use App\WhatDo;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(WhatDo::class, function(ModelConfiguration $model) {
	$model->setTitle('Що ми робимо');

	// Display
	$model->onDisplay(function() {
		$display = AdminDisplay::table()->setColumns([
			AdminColumn::image('image')->setLabel('Зображення')
				->setWidth('100px'),
			AdminColumn::link('text_uk')->setLabel('Текст')->setWidth('400px'),
		]);

		$display->paginate(15);

		return $display;
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::columns()
				->addColumn(function() {
					return [
					];
				})->addColumn(function() {
					return [
						AdminFormElement::image('image', 'Image')->required()
					];
				})->addColumn(function() {
					return [
					];
				})
		);
		$form->setItems(
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::textarea('text_uk', 'Текст (uk)'),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::textarea('text_en', 'Текст (en)'),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::textarea('text_ru', 'Текст (ru)'),
					];
				})
		);

		return $form;
	});
});