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

Route::get('/', 'WelcomeController@welcome');

Route::get('/callback', 'CallbackController@handleCallback');
Route::post('/callback', 'CallbackController@handleCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/discover', 'DiscoverController@index');

Route::get('/movie/popular', 'MovieController@popular');
Route::get('/movie/top_rated', 'MovieController@topRated');
Route::get('/movie/up_coming', 'MovieController@upComing');
Route::get('/movie/now_playing', 'MovieController@nowPlaying');

Route::get('/people', 'PeopleController@people');