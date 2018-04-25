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
Route::get('/admin', function(){
    return view('admin.dashboard');
})->middleware('admin')->name('adminDashboard');

Route::get('/admin/tokenInput/celebs','Admin\TokenInput@getCelebs')->name('celebsToken');
Route::get('/admin/tokenInput/genre','Admin\TokenInput@getGenre')->name('genreToken');


Route::get('/admin/add','Admin\AddController@index')->name('addUri');
Route::post('/admin/add','Admin\AddController@index')->name('addUri');

Route::get('/admin/edit','Admin\EditController@index')->name('editUri');
Route::post('/admin/edit','Admin\EditController@index')->name('editUri');

Route::get('/admin/remove','Admin\RemoveController@index')->name('removeUri');
Route::post('/admin/remove','Admin\RemoveController@index')->name('removeUri');

Route::get('/admin/edit/film/{id}', 'Admin\EditController@editFilm')->name('editFilm');
Route::get('/admin/edit/celeb/{id}', 'Admin\EditController@editCeleb')->name('editCeleb');

Route::get('/admin/add/film', function (){
    return view('admin.add.film');
})->name('addFilm');

Route::get('/admin/add/celeb', function (){
    return view('admin.add.celeb');
})->name('addCeleb');



Route::get('/admin/allFilm','Admin\MovieController@index')->name('allFilms');
Route::get('/admin/allCelebs','Admin\CelebsController@index')->name('allCelebs');
Route::get('/admin/allUsers','Admin\UsersController@index')->name('allUsers');

Route::get('/search', 'SearchController@test');

Route::get('/discover', 'DiscoverController@index');

Route::get('/movie/popular', 'MovieController@popular');
Route::get('/movie/top_rated', 'MovieController@topRated');
Route::get('/movie/up_coming', 'MovieController@upComing');
Route::get('/movie/now_playing', 'MovieController@nowPlaying');
Route::get('/movie/{id}', 'MovieController@filmInfo');

Route::get('/people', 'PeopleController@people');

Route::get('/rate', 'RatingController@rate');

Route::get('/comment/{film_id}', 'CommentController@getComments');
Route::get('/comment_add', 'CommentController@addComment');




