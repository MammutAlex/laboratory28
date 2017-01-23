<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
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
