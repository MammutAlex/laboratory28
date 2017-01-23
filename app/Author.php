<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
	use Polyglot;


	/**
	 * Translation title data
	 *
	 * @return mixed
	 */
	public function name()
	{
		return $this->translation('name');
	}

	/**
	 * Translation position data
	 *
	 * @return mixed
	 */
	public function position()
	{
		return $this->translation('position');
	}

	/**
	 * Translation institute data
	 *
	 * @return mixed
	 */
	public function institute()
	{
		return $this->translation('institute');
	}
}
