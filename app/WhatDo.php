<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhatDo extends Model
{
	use Polyglot;

	/**
	 * Translation text data
	 *
	 * @return mixed
	 */
	public function text()
	{
		return $this->translation('text');
	}
}
