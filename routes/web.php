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


Route::group(['prefix'=>'user'], function(){
    Route::get('/','Manage\UserController@index')->name('manage.user');
    Route::get('/add/form/user','Manage\UserController@create')->name('manage.add.form.invite');
});

Route::group(['prefix'=>'lesson'], function(){
    Route::get('/','Manage\LessonController@index')->name('manage.lessons');
    Route::get('/add/form/lesson','Manage\LessonController@create')->name('manage.add.form.lesson');
});

Route::group(['prefix'=>'class'], function(){
    Route::get('/','Manage\ClassController@index')->name('manage.kelas');
    Route::get('/add/form/kelas','Manage\ClassController@create')->name('manage.add.form.kelas');
});

Route::group(['prefix'=>'store'], function(){
Route::post('lessons','Manage\LessonController@store')->name('store.lesson');
Route::post('kelas','Manage\ClassController@store')->name('store.class');
Route::post('user','Manage\UserController@store')->name('store.user');

});

Route::group(['prefix' => 'edit'], function () {
    route::get('lesson/{lesson}', 'Manage\LessonController@edit')->name('edit.lesson');
    route::get('kelas/{id}','Manage\ClassController@edit')->name('edit.class');
    route::get('user/{id}','Manage\UserController@edit')->name('edit.user');

});

Route::group(['prefix' => 'update'], function () {
    route::patch('lesson/{lesson}', 'Manage\LessonController@update')->name('update.lesson');
    route::patch('kelas/{id}', 'Manage\ClassController@update')->name('update.class');
    route::patch('user/{id}','Manage\UserController@edit')->name('update.user');

});

Route::group(['prefix' => 'destroy'], function () {
    route::delete('lesson/{lesson}', 'Manage\LessonController@destroy')->name('destroy.lesson');
    route::delete('kelas/{id}', 'Manage\ClassController@destroy')->name('destroy.class');
    route::delete('user/{id}','Manage\UserController@edit')->name('destroy.user');
});

