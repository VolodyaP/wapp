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


use Illuminate\Support\Facades\Request;

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', ['uses' => 'IndexController@index']);

Route::get('admin', ['uses' => 'AdminController@index']);
Route::get('admin/users', ['uses' => 'AdminController@users']);
Route::get('admin/user/{id}/approve', ['uses' => 'AdminController@usersApprove']);
Route::get('admin/user/{id}/reject', ['uses' => 'AdminController@usersReject']);
Route::get('admin/partner/type', ['uses' => 'AdminController@partner']);
Route::get('admin/statistic', ['uses' => 'AdminController@statistic']);

Route::get('group/create','GroupController@create');
Route::get('group/{id}/userlist','GroupController@userList');
Route::get('group','GroupController@index');
Route::get('group/{id}','GroupController@show');
Route::post('group','GroupController@store');
Route::post('group/{id}/update','GroupController@update');

//Route::get('event', ['uses' => 'EventController@index']);
Route::get('event/create', ['uses' => 'EventController@create']);
Route::post('event', ['uses' => 'EventController@store']);
Route::get('event/{id}', ['uses' => 'EventController@show']);
Route::get('event/{id}/partners', ['uses' => 'EventController@partners']);
Route::post('event/{id}/add/partner', ['uses' => 'EventController@partnerAdd']);
Route::post('event/delete', ['uses' => 'EventController@delete']);
Route::post('/test/post',function(){
    if(Request::ajax()){
        dd(\Illuminate\Support\Facades\Response::json(Request::all()));
        return 'some string with ajax';
//        return \Illuminate\Support\Facades\Response::json(Request::all());
    }
});

Route::get('partner', ['uses' => 'PartnerController@index']);
Route::get('partner/create', ['uses' => 'PartnerController@create']);
Route::get('partner/type/create', ['uses' => 'PartnerController@typeCreate']);
Route::post('partner/type/store', ['uses' => 'PartnerController@typeStore']);
Route::post('partner', ['uses' => 'PartnerController@store']);




