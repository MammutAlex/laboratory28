<?php

use App\IndexImage;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(IndexImage::class, function(ModelConfiguration $model) {
	$model->setTitle('Companies');

	// Display
	$model->onDisplay(function() {
		$display = AdminDisplay::table()->setColumns([
			AdminColumn::image('image')->setLabel('Image')
				->setWidth('100px'),
			AdminColumn::link('title')->setLabel('Title')->setWidth('400px'),
		]);

		$display->paginate(15);

		return $display;
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		return $form = AdminForm::panel()->addBody(
			AdminFormElement::text('title', 'Title'),
			AdminFormElement::image('image', 'Image')->required()
		);

		return $form;
	});
})
	->addMenuPage(IndexImage::class, 0)
	->setIcon('fa fa-bank');