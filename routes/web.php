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
Route::get('/', function(){
	return view('home');
});
Route::get('one', 'MainController@index');
Route::post('two', 'ExcelOneController@importExcelFile');
Route::post('result', 'ExcelTwoController@importExcelFile');
Route::get('results', 'ResultController@index');

