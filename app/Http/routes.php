<?php

use Illuminate\Support\Facades\Input;

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
Route::post('contact_mail', 'FrontController@postContact');
Route::get('mentions', 'FrontController@mentions');
Route::resource('comment', 'CommentController');
Route::get('search', 'FrontController@search');


Route::group(['middleware' => ['web']], function () {
    Route::any('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('teacher', 'AdminController@teacher');
        Route::get('student', 'AdminController@student');
        Route::get('qcm', 'AdminController@qcm');
        Route::get('qcm/{id}/edit', 'AdminController@qcmEdit');
        Route::put('qcm/{id}/edit', 'AdminController@qcmUpdate');
        Route::resource('post', 'PostController');
        Route::resource('question', 'QuestionController');
        Route::get('question/{id}/choice', 'ChoiceController@edit');
        Route::put('question/{id}/choice', 'ChoiceController@update');
        Route::post('question/action', 'QuestionController@action');
        Route::post('post/action', 'PostController@action');
        Route::get('changeStatus/{id}', 'PostController@changeStatus');
        Route::get('changeStatusComment/{id}', 'CommentController@changeStatusComment');
    });
});
