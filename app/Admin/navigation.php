<?php

use App\About;
use App\IndexImage;
use App\IndexVideo;
use App\Lecture;
use App\News;
use App\Publication;
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
			(new Page(IndexVideo::class))
				->setIcon('fa fa-youtube-play')
				->setPriority(0),
		]
	],
	['title' => 'Записи',
	 'icon'  => 'fa fa-dashboard',
	 'pages' => [
		 (new Page(News::class))
			 ->setIcon('fa fa-newspaper-o')
			 ->setPriority(0),
		 (new Page(About::class))
			 ->setIcon('fa fa-grav')
			 ->setPriority(0),
		 (new Page(Publication::class))
			 ->setIcon('fa fa-wpexplorer')
			 ->setPriority(0),
		 (new Page(Lecture::class))
			 ->setIcon('fa fa-graduation-cap')
			 ->setPriority(0),
	 ]
	]
];