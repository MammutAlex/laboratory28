<?php

namespace App\Http\Controllers;

use App\About;
use App\IndexImage;
use App\IndexVideo;
use App\News;
use App\WhatDo;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	/**
	 * View index page
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		return view('web.index', [
			'images'   => IndexImage::get(),
			'whatDoes' => WhatDo::get(),
			'news'     => News::wherePublished()->take(3)->get(),
			'video'    => IndexVideo::first(),
		]);
	}

	public function about()
	{

		return view('web.about', [
			'abouts' => About::get()
		]);
	}
}