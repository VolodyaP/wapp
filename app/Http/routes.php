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

Route::get('/', function () {
    return view('app');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('admin', ['uses' => 'AdminController@index']);

Route::get('group/create','GroupController@create');
Route::get('group/{id}/userlist','GroupController@userList');
Route::get('group','GroupController@index');
Route::get('group/{id}','GroupController@show');
Route::post('group','GroupController@store');
Route::post('group/{id}/update','GroupController@update');




