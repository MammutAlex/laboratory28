<?php

use App\Author;
use App\Seminar;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Seminar::class, function(ModelConfiguration $model) {
	$model->setTitle('Семінари');

	// Display
	$model->onDisplay(function() {
		return AdminDisplay::table()->setApply(function($query) {
			$query->orderBy('date', 'desc');
		})->setColumns([
			AdminColumn::image('image')->setLabel('Зображення')->setWidth('100px'),
			AdminColumn::link('title_uk')->setLabel('Загаловок'),
			AdminColumn::datetime('date')->setLabel('Дата')->setFormat('Y-m-d')->setWidth('150px'),
			AdminColumnEditable::checkbox('published')->setLabel('Опубліковано'),
		])->paginate(25);
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::text('title_en', 'Загаловок (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('title_ru', 'Загаловок (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('title_uk', 'Загаловок (uk)')->required(),
					];
				}),
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::text('title2_en', 'Під-загаловок (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('title2_ru', 'Під-загаловок (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('title2_uk', 'Під-загаловок (uk)')->required(),
					];
				}),
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::text('description_en', 'Короткий опис (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('description_ru', 'Короткий опис (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::text('description_uk', 'Короткий опис (uk)')->required(),
					];
				}),
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
				}),
			AdminFormElement::columns()
				->addColumn(function() {
					return [
						AdminFormElement::wysiwyg('text2_en', 'Текст під відео (en)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::wysiwyg('text2_ru', 'Текст під відео (ru)')->required(),
					];
				})->addColumn(function() {
					return [
						AdminFormElement::wysiwyg('text2_uk', 'Текст під відео (uk)')->required(),
					];
				}),
			AdminFormElement::date('date', 'Дата')->required()->setFormat('Y-m-d'),
			AdminFormElement::select('author_id', 'Автор')->setModelForOptions(new Author())->setDisplay('name_uk'),
			AdminFormElement::checkbox('published', 'Опубліковано'),
			AdminFormElement::text('video', 'Відео'),
			AdminFormElement::image('image', 'Фото')->required()
		);

		return $form;
	});
});
