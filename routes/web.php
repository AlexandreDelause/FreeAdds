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
Auth::routes();
Route::resource('freeadds','FreeADDController');
Route::get('freeadd', 'FreeADDController@freeADD');
Route::get('freeaddmy', 'FreeADDController@index');
Route::post('freeadd', ['as'=>'freeadd.store','uses'=>'FreeADDController@freeADDPost']);
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users','UserController');
Route::get('/{regex?}', function () {
return view('index');
});
