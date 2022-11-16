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

Route::get('test/{a}','TestController@test');
Route::get('index','DashboardController@index')->name('dashboard.index');
Route::get('create','DashboardController@create')->name('dashboard.create');
Route::get('edit','DashboardController@edit')->name('dashboard.edit');


Route::get('form','FormController@create')->name('form.create');
Route::post('store','FormController@store')->name('form.store');

Route::get('form-delete/{id}','FormController@destory')->name('form.destory');
Route::get('form-edit/{id}','FormController@edit')->name('form.edit');

Route::post('form-update/{id}','FormController@update')->name('form.update');

Route::resource("san-kyi","SannkyiController");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');