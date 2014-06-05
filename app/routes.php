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

Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@logout');


//Route::post('eventos', 'AuthController@postLogin');
Route::get('eventos', array('as' => 'eventos', 'uses' => 'AuthController@postLogin'));


Route::get('registro', 'RegistroController@showForm');
Route::post('registro', 'RegistroController@postRegistro');




Route::get('/', function()
{
	return View::make('hello');
});

