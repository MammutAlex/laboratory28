<?php

use App\About;
use App\Author;
use App\IndexImage;
use App\IndexVideo;
use App\Lecture;
use App\Category;
use App\Message;
use App\News;
use App\Partner;
use App\Publication;
use App\Quote;
use App\Review;
use App\Seminar;
use App\Team;
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
		 (new Page(Author::class))
			 ->setIcon('fa fa-graduation-cap')
			 ->setPriority(0),
		 (new Page(Seminar::class))
			 ->setIcon('fa fa-graduation-cap')
			 ->setPriority(0),
		 (new Page(Category::class))
			 ->setIcon('fa fa-graduation-cap')
			 ->setPriority(0),
		 (new Page(Team::class))
			 ->setIcon('fa fa-graduation-cap')
			 ->setPriority(0),
		 (new Page(Quote::class))
			 ->setIcon('fa fa-graduation-cap')
			 ->setPriority(0),
		 (new Page(Review::class))
			 ->setIcon('fa fa-graduation-cap')
			 ->setPriority(0),
		 (new Page(Partner::class))
			 ->setIcon('fa fa-graduation-cap')
			 ->setPriority(0),
		 (new Page(Message::class))
			 ->setIcon('fa fa-graduation-cap')
			 ->setPriority(0),
	 ]
	]
];