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
	return View::make('hello');
});

Route::get('resume',function(){
	return View::make('resume')
		->nest('navbar_view','navbar')
		->nest('includes_view','includes');
});

Route::get('/welcome',function(){
    return View::make('hello');
});

Route::get('/sudoku',function(){
    return View::make('sudoku')
            ->nest('navbar_view','navbar')
            ->nest('includes_view','includes');
});

Route::get('/home',function(){
    return View::make('hello');
});

Route::post('solve','SudokuController@solve');
