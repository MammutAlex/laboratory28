<?php

use SleepingOwl\Admin\Navigation\Page;

return [
	[
		'title' => 'Dashboard',
		'icon'  => 'fa fa-dashboard',
		'url'   => route('admin.dashboard'),
	],

	[
		'title' => 'Information',
		'icon'  => 'fa fa-exclamation-circle',
		'url'   => route('admin.information'),
	],
];