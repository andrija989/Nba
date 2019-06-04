<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teams',['as' => 'teams-list','uses' => 'TeamsController@index']);

Route::get('/teams/{id}',['as' => 'team','uses' => 'TeamsController@show']);

Route::get('/register',['as' => 'register-form','uses' => 'RegisterController@create']);

Route::post('/register','RegisterController@store');

Route::get('/login','LoginController@log');

Route::post('/login','LoginController@store');

Route::get('/logout','LoginController@destroy');

Route::get('/player/{id}','PlayersController@show');

Route::post('/teams/{team_id}/comments', ['as' => 'comments-team','uses'=> 'CommentsController@store'])->middleware("block");;

