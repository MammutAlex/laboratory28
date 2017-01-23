<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexVideo extends Model
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
}
