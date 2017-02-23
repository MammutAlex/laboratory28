<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MammutAlex\Polyglot\Polyglot;

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
