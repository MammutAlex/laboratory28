<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
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
	 * Translation description data
	 *
	 * @return mixed
	 */
	public function description()
	{
		return $this->translation('description');
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

	public static function wherePublished()
	{
		return self::where('published', true);
	}

	public function getDates()
	{
		return array_merge(parent::getDates(), ['date']);
	}
}
