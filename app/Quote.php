<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
	use Polyglot;


	/**
	 * Translation title data
	 *
	 * @return mixed
	 */
	public function title()
	{
		return $this->translation('title');
	}

	/**
	 * Translation position data
	 *
	 * @return mixed
	 */
	public function text()
	{
		return $this->translation('text');
	}
}
