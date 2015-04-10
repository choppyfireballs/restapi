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

//Route::post('favorite',array('as'=>'userFavorite','uses'=>'UserController@test_new_function'));
Route::post('user/{userid}/visits','UserController@add_location');
Route::get('user/{userid}/visits',array('as'=>'user','uses'=>'UserController@get_locations'));
Route::get('states/{state}/cities','CityController@get_locations');
Route::get('states/{state}/cities/{city}','CityController@search_by_city');
Route::post('login', array('as'=>'login','uses'=>'UserController@login'));
/*Route::any('{all}',function(){
    //return Response::json(array('message'=>'Invalid request'),401);
    return 'helloworld';
});*/
Route::any('{all}', array('uses' => 'CityController@failed'))->where('all', '.*');
