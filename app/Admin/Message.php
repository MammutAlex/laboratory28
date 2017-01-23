<?php

use App\Message;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Message::class, function(ModelConfiguration $model) {
	$model->setTitle('Повідомлення');

	// Display
	$model->onDisplay(function() {
		return AdminDisplay::table()->setColumns([
			AdminColumn::text('email')->setLabel('Email'),
			AdminColumn::text('name')->setLabel('Імʼя'),
			AdminColumn::text('text')->setLabel('Текст'),
		])->paginate(25);
	});
});
