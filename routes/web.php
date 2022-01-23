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
    Route::get('/add/form/user','UserController@create')->name('users.create');
});

Route::group(['prefix'=>'lesson'], function(){
    Route::get('/','LessonController@index')->name('lessons');
    Route::get('/add/form/lesson','LessonController@create')->name('lessons.create');
});

Route::group(['prefix'=>'class'], function(){
    Route::get('/','ClassController@index')->name('class');
    Route::get('/add/form/class','ClassController@create')->name('class.create');
});

Route::group(['prefix'=>'store'], function(){
Route::post('lesson','LessonController@store')->name('store.lesson');
});

Route::group(['prefix' => 'edit'], function () {
    route::get('lesson/{lesson}', 'LessonController@edit')->name('edit.lesson');
});

Route::group(['prefix' => 'update'], function () {
    route::patch('lesson/{lesson}', 'LessonController@update')->name('update.lesson');
});

Route::group(['prefix' => 'destroy'], function () {
    route::delete('lesson/{lesson}', 'LessonController@destroy')->name('destroy.lesson');
});

