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

// Route ke home
Route::get('home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'master-data'], function(){
    Route::get('/siswa', 'SiswaController@index')->name('master-data.siswa');
    Route::get('/kelas', 'KelasController@index')->name('master-data.kelas');
});

Route::get('login/github','GithubController@redirectToProvider');
Route::get('login/github/callback','GithubController@handleProviderCallback');


Route::group(['prefix'=>'users'], function(){
    Route::get('/','UserController@index')->name('users');
    Route::get('/create','UserController@create')->name('users.create');
});

Route::group(['prefix'=>'lesson'], function(){
    Route::get('/','LessonController@index')->name('lessons');
    Route::get('/add/form/invit','LessonController@create')->name('lessons.create');
});

Route::group(['prefix'=>'class'], function(){
    Route::get('/','ClassController@index')->name('class');
    Route::get('/add/form/invit','ClassController@create')->name('class.create');
});


