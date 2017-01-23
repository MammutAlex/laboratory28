<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use Polyglot;

	public function first_name()
	{
		$this->translation('first_name');
    }
	public function last_name()
	{
		$this->translation('last_name');
    }
	public function position()
	{
		$this->translation('position');
    }
}
