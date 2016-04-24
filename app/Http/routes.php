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


Route::get('/','HomeController@index');

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    

    //Route::get('/home', 'HomeController@index');
    //Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
	//Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
});


Route::group(['name'=>'admin','prefix' => 'admin','middleware' => ['web']], function () {
    
    Route::get('/dashboard','Admin\DashbroadController@index');

    Route::get('/user','Admin\Mst_userController@index');
    Route::post('/task', 'Admin\Task\TaskController@store');
	Route::delete('/task/{task}', 'Admin\Task\TaskController@destroy');
});

