<?php
//Site developed for Ifactory by @AlfonsoMonroyIV 
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

//Main routes

Route::get('/', function(){	return View::make('/home/cv');});
Route::get('home', function(){	return View::make('/home/cv');});
Route::get('about', function(){return View::make('home/about');});
Route::get('portafolio',function(){return View::make('home/portafolio');});

//CRUD routes
Route::resource('crud', 'practicas_ProductosController');
