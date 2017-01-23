<?php

use App\IndexImage;
use App\News;
use App\WhatDo;
use SleepingOwl\Admin\Navigation\Page;

return [
	[
		'title' => 'Головна сторінка',
		'icon'  => 'fa fa-dashboard',
		'pages' => [
			(new Page(IndexImage::class))
				->setIcon('fa fa-file-image-o')
				->setPriority(0),
			(new Page(WhatDo::class))
				->setIcon('fa fa-university')
				->setPriority(0),
		]
	],
	['title' => 'Записи',
	 'icon'  => 'fa fa-dashboard',
	 'pages' => [
		 (new Page(News::class))
			 ->setIcon('fa fa-newspaper-o')
			 ->setPriority(0)
	 ]
	]
];