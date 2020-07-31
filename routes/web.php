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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index')->name('posts');
Route::post('/addpost', 'PostsController@store')->name('addpost');
Route::post('/editpost', 'PostsController@update')->name('editpost');
Route::delete('/deletepost/{id}', 'PostsController@delete')->name('deletepost');

Route::get('/posttypes', 'PostTypeController@index')->name('posttypes');
Route::post('/addposttype', 'PostTypeController@store')->name('addposttype');
Route::post('/editposttype', 'PostTypeController@update')->name('editposttype');
Route::delete('/deleteposttype/{id}', 'PostTypeController@delete')->name('deleteposttype');

