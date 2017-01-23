<?php

namespace App\Http\Controllers;

use App\Seminar;

class SeminarController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$seminars = Seminar::wherePublished()->paginate(3);

		return view('web.seminars', [
			'seminars' => $seminars
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
		return view('web.seminar', [
			'likes'    => Seminar::wherePublished()->take(3)->get(),
			'seminar' => Seminar::wherePublished()->find($id)
		]);
	}
}
