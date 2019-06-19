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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','StaticsController@Greetings');
Route::get('about','StaticsController@About');
Route::get('home','StaticsController@Home');
Route::get('contact','StaticsController@Contact');
Route::resource('article','articleController');
