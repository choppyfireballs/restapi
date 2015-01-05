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

Route::get('/welcome',function(){
    return View::make('hello');
});

Route::get('/sudoku',function(){
    return View::make('sudoku');
});

Route::post('solve','SudokuController@solve');