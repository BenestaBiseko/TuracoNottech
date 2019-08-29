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
    return view('pages.dashboard');
});
Route::get('/courses', 'PostController@index');
//Route::get('/edit', 'PostController@edit');
Route::get('/create', 'PostController@create');
Route::post('/create', 'PostController@store');
//Route::post('/edit', 'PostController@update');


//->name('courses.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
