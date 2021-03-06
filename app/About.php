<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MammutAlex\Polyglot\Polyglot;

class About extends Model
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
	 * Translation text data
	 *
	 * @return mixed
	 */
	public function text()
	{
		return $this->translation('text');
	}
}
