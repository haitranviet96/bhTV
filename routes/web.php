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

Route::get('/admin/tokeninput','Admin\TokenInput@getCelebs')->name('celebsToken');

Route::get('/admin/add','Admin\AddController@index')->name('addUri');
Route::post('/admin/add','Admin\AddController@index')->name('addUri');

Route::get('/admin/edit/film', function (){
    return view('admin.edit.film');
})->name('editfilm');

Route::get('/admin/add/film', function (){
    return view('admin.add.film');
})->name('addfilm');

Route::get('/admin/remove/film', function(){
   return view('admin.remove.film');
})->name('removefilm');

Route::get('/admin/edit/celeb', function(){
    return view('admin.edit.celeb');
})->name('editceleb');

Route::get('/admin/add/celeb', function (){
    return view('admin.add.celeb');
})->name('addceleb');

Route::get('/admin/remove/celeb',function (){
    return view('admin.remove.celeb');
})->name('removeceleb');

Route::get('/admin/edit/genre',function (){
    return view('admin.edit.genre');
})->name('editgenre');

Route::get('/admin/add/genre',function (){
    return view('admin.add.genre');
})->name('addgenre');

Route::get('/admin/remove/genre',function (){
   return view('admin.remove.genre');
})->name('removegenre');

Route::get('/search', 'SearchController@test');

Route::get('/discover', 'DiscoverController@index');

Route::get('/movie/popular', 'MovieController@popular');
Route::get('/movie/top_rated', 'MovieController@topRated');
Route::get('/movie/up_coming', 'MovieController@upComing');
Route::get('/movie/now_playing', 'MovieController@nowPlaying');

Route::get('/people', 'PeopleController@people');