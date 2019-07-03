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
Route::get('homes','StaticsController@Home');
Route::get('contact','StaticsController@Contact');
Route::post('prosescontact','StaticsController@ProsesContactUs');


Auth::routes();

//Route::get('/home','HomeController@index')->name('home')->middleware('auth');
Route::get('popular-movies','MovieController@popularMovies')->name('popular-movies');
Route::get('movie-detail','MovieController@detailMovies')->name('detail-movies');

Route::group(['middleware' => ['auth','role:manager,employee']], function () {
    Route::get('/home','HomeController@index')->name('home');
    Route::resource('article','articleController');
    Route::resource('comment','CommentController',['only'=>['store']]);
});
Route::group(['middleware' => ['auth','role:manager']], function () {
    Route::get('manager-ds','Manager\ManagerController@index')->name('manager-home');
    Route::resource('manager-um','Manager\UserManageController');    
    Route::get('export','Manager\UserManageController@export')->name('export');
    Route::post('import','Manager\UserManageController@import')->name('import');
    Route::get('generate-pdf','Manager\UserManageController@generatePDF')->name('pdf');
});
Route::group(['middleware' => ['auth','role:employee']], function () {
    Route::get('employee','Employee\EmployeeController@index')->name('employee-home');    
});

