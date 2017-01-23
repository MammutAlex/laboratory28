<?php

use App\Partner;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Partner::class, function(ModelConfiguration $model) {
	$model->setTitle('Партнери');

	// Display
	$model->onDisplay(function() {
		return AdminDisplay::table()->setColumns([
			AdminColumn::image('image')->setLabel('Зображення')->setWidth('100px'),
		])->paginate(25);
	});

	// Create And Edit
	$model->onCreateAndEdit(function() {
		$form = AdminForm::panel()->addBody(
			AdminFormElement::image('image', 'Фото')->required()
		);

		return $form;
	});
});
