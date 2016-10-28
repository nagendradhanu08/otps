<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::get('/login','AuthController@loginPage');
Route::get('/register','AuthController@registerPage');

Route::post('/login',['as'=>'auth.login','uses'=>'AuthController@login']);
Route::post('/register',['as'=>'auth.register','uses'=>'AuthController@register']);