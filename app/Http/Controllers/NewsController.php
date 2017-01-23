<?php

namespace App\Http\Controllers;

use App\News;

class NewsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('web.news', [
			'news' => News::wherePublished()->paginate(6)
		]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		return view('web.article', [
			'article' => News::wherePublished()->find($id)
		]);
	}
}
