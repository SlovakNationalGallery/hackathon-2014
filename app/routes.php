<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home', ['images'=>getImages()]);
});

Route::get('/2014', function()
{
	return View::make('2014', ['images'=>getImages()]);
});


function getImages()
{
	$intro_images_path = '/img/fotogaleria/';
	$folder = public_path().$intro_images_path;
	$filetype = '{*.jpeg,*.JPG,*.jpg,*.png}';
	$files = glob($folder.$filetype, GLOB_BRACE);
	return $files;
}