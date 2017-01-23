<?php

namespace App\Http\Controllers;

use App\Lecture;

class LectureController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$lectures = Lecture::wherePublished()->orderBy('date', 'desc')->paginate(6);

		if($lectures->currentPage() == 1) {
			$lastLecture = $lectures[0];
		} else {
			$lastLecture = false;
		}

		return view('web.lectures', [
			'lectures'    => $lectures,
			'lastLecture' => $lastLecture
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
		return view('web.lecture', [
			'lecture' => Lecture::wherePublished()->find($id)
		]);
	}
}
