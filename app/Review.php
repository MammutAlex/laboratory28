<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
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
	 * Translation signature data
	 *
	 * @return mixed
	 */
	public function signature()
	{
		return $this->translation('signature');
	}
}
