<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','dataController@index');
Route::get('/setPoint','setPointController@index')->name("setPoint");
Route::post('/setPoint/update','setPointController@store')->name("setPoint-update");
// Route::get('/event','dataController@event');
// Route::get('/ov','dataController@ov');