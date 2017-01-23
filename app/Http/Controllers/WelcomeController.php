<?php

namespace App\Http\Controllers;

use App\About;
use App\IndexImage;
use App\IndexVideo;
use App\News;
use App\Publication;
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

	/**
	 * View about page
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function about()
	{
		return view('web.about', [
			'abouts' => About::get()
		]);
	}

	/**
	 * View publications page
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function publications()
	{
		$publications = Publication::get();
		$yearsPublications = [];
		foreach($publications as $publication) {
			$yearsPublications = array_add($yearsPublications, $publication->date->year, []);
			array_push($yearsPublications[$publication->date->year], $publication);
		}
		return view('web.publications', [
			'publications' => $yearsPublications
		]);
	}
}