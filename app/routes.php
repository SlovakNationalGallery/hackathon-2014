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
	return View::make('home', ['images'=>getImages('/img/photogallery/2016/')]);
});

Route::get('/2014', function()
{
	return View::make('2014', ['images'=>getImages('/img/photogallery/2014/')]);
});


function getImages($intro_images_path)
{
	$folder = public_path().$intro_images_path;
	$filetype = '{*.jpeg,*.JPG,*.jpg,*.png}';
	$files = glob($folder.$filetype, GLOB_BRACE);
	return $files;
}