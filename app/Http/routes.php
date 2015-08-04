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

//Route::get('/', function () {
//    return view('app');
//});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', ['uses' => 'IndexController@index']);

Route::get('admin', ['uses' => 'AdminController@index']);
Route::get('admin/users', ['uses' => 'AdminController@users']);
Route::get('admin/user/{id}/approve', ['uses' => 'AdminController@usersApprove']);
Route::get('admin/user/{id}/reject', ['uses' => 'AdminController@usersReject']);

Route::get('group/create','GroupController@create');
Route::get('group/{id}/userlist','GroupController@userList');
Route::get('group','GroupController@index');
Route::get('group/{id}','GroupController@show');
Route::post('group','GroupController@store');
Route::post('group/{id}/update','GroupController@update');

Route::get('/event', ['uses' => 'EventController@index']);
Route::get('/event/create', ['uses' => 'EventController@create']);
Route::post('/event', ['uses' => 'EventController@store']);


