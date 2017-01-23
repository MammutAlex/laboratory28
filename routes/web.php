<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::get('/', 'WelcomeController@index')->name('index');
Route::get('/about', 'WelcomeController@about')->name('about');
Route::resource('/news', 'NewsController');

Route::get('/seminars', function() {
	return view('web.seminars');
})->name('seminars');

Route::get('/publications', function() {
	return view('web.publications');
})->name('publications');

Route::get('/lectures', function() {
	return view('web.lectures');
})->name('lectures');

Route::get('/links', function() {
	return view('web.links');
})->name('links');

Route::get('/login', 'Auth\LoginController@show')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('loginPost');
