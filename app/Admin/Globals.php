<?php

use App\Globals;
use App\IndexImage;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Globals::class, function(ModelConfiguration $model) {
	$model->setTitle('Настройки сайту');

	// Display
	$model->onDisplay(function() {
		$display = AdminDisplay::table()->setColumns([
			AdminColumn::image('logo')->setLabel('Image')->setWidth('100px')
		]);
		return $display;
	});
	$model->disableCreating();
	$model->disableDeleting();
	$model->onEdit(function() {
		return $form = AdminForm::panel()->addBody(
			AdminFormElement::text('title', 'Title'),
			AdminFormElement::image('image', 'Image')->required()
		);

		return $form;
	});
});