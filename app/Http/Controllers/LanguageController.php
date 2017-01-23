<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.01.17
 * Time: 10:40
 */
namespace App\Http\Controllers;
use Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
	public function switchLang($lang)
	{
		if (array_key_exists($lang, Config::get('languages'))) {
			Session::set('applocale', $lang);
		}
		return Redirect::back();
	}
}