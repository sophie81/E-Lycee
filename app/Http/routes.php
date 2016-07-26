<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontController@index');
Route::get('actualites', 'FrontController@actus');
Route::get('actualite/{id}', 'FrontController@showActu');
Route::get('lycee', 'FrontController@lycee');
Route::get('contact', 'FrontController@contact');
Route::get('mentions', 'FrontController@mentions');


Route::group(['middleware' => ['web']], function () {
    Route::any('login', 'LoginController@login');
});