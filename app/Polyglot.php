<?php
	/**
	 * Created by PhpStorm.
	 * User: mammut
	 * Date: 24.12.16
	 * Time: 17:12
	 */

	namespace App;
	use App;

	/**
	 * Class Polyglot translation model data
	 *
	 * @package App
	 */
	trait Polyglot
	{
		/**
		 * Translation data from DB
		 *
		 * @param $name
		 *
		 * @return mixed
		 */
		public function translation($name) {
			return $this->{$name . '_' . App::getLocale()};
		}
	}