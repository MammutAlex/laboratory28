<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MammutAlex\Polyglot\Polyglot;

class Globals extends Model
{
	use Polyglot;

	public function index_title()
	{
		return $this->translation('index_title');
	}

	public function index_sub_title()
	{
		return $this->translation('index_sub_title');
	}

	public function index_we_doing_title()
	{
		return $this->translation('index_we_doing_title');
	}

	public function index_we_doing_sub_title()
	{
		return $this->translation('index_we_doing_sub_title');
	}

	public function index_news_title()
	{
		return $this->translation('index_news_title');
	}

	public function index_news_more()
	{
		return $this->translation('index_news_more');
	}

	public function index_video_watch()
	{
		return $this->translation('index_news_more');
	}

	public function index_news_sub_title()
	{
		return $this->translation('index_news_sub_title');
	}

	public function index_about_as_title()
	{
		return $this->translation('index_about_as_title');
	}

	public function index_partner_title()
	{
		return $this->translation('index_partner_title');
	}

	public function index_contact_title()
	{
		return $this->translation('index_contact_title');
	}

	public function index_contact_address()
	{
		return $this->translation('index_contact_address');
	}

	public function index_about_title()
	{
		return $this->translation('index_about_title');
	}

	public function index_about_text()
	{
		return $this->translation('index_about_text');
	}

	public function about_title()
	{
		return $this->translation('about_title');
	}

	public function seminar_title()
	{
		return $this->translation('seminar_title');
	}

	public function publication_title()
	{
		return $this->translation('publication_title');
	}

	public function lecture_title()
	{
		return $this->translation('lecture_title');
	}

	public function news_title()
	{
		return $this->translation('news_title');
	}
}
