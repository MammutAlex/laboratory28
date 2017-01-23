<?php

namespace App\Http\Controllers;

use App\IndexImage;
use App\WhatDo;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function index()
	{
		return view('web.index', [
			'images'   => IndexImage::get(),
			'whatDoes' => WhatDo::get()
		]);
	}
}