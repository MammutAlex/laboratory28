<?php

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::get('/', 'WelcomeController@index')->name('index');
Route::get('/about', 'WelcomeController@about')->name('about');
Route::get('/publications', 'WelcomeController@publications')->name('publications');
Route::resource('/lectures', 'LectureController');
Route::resource('/news', 'NewsController');
Route::resource('/seminars', 'SeminarController');

Route::get('/links', function() {
	return view('web.links');
})->name('links');

Route::get('/login', 'Auth\LoginController@show')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('loginPost');
