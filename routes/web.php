<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//Auth::routes(); //no need to use
Route::get('/aboutus', 'AboutUsController@index')->name('aboutus');
Route::get('/forum', 'ForumController@index')->name('forum');
Route::post('/forum', 'ForumController@search')->name('forum.search');
Route::get('/', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
Route::get('/auth/{provide}/callback', 'Auth\SocialAuthController@handleProviderCallback');