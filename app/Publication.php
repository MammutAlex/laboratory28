<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MammutAlex\Polyglot\Polyglot;

class Publication extends Model
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
	public function getDates()
	{
		return array_merge(parent::getDates(), ['date']);
	}
}
