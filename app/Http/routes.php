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
Route::group(['namespace' => 'Index'], function () {
    // Route::any('/{name?}','IndexController@index');//可寻参数

    Route::get('user', 'UserController@index');
});

Route::group(['namespace' => 'Mail'], function () {
Route::get('/qqemail','QqmailController@gosend');
});


Route::auth();

Route::get('/home', 'HomeController@index');
