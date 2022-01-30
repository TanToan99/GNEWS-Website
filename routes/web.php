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
Route::get('/uid/{linkfb}','UIDFacebookController@index');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
Route::get('/auth/{provide}/callback', 'Auth\SocialAuthController@handleProviderCallback');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/aboutus', 'AboutUsController@index')->name('aboutus');

Route::get('/posts', 'PostsController@index')->name('posts');
Route::post('/posts', 'PostsController@search')->name('posts.search');
Route::get('/posts/{id}', 'PostsController@show')->name('posts.show');
Route::post('/posts/like','PostsController@like')->name('posts.like')->middleware('auth');


Route::get('/event','EventController@index')->name('event');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile','UserController@index')->name('profile');
    Route::post('/profile','UserController@add_link_fb')->name('profile.addFB');
    Route::post('/profile/invite','UserController@invite')->name('profile.invite');
    
    Route::get('messages', 'ChatsController@fetchMessages');
    Route::post('messages', 'ChatsController@sendMessage'); //todo: fix dont save chat
    
    Route::post("/gifts/random","GiftController@random")->name('random');
    Route::post("/gifts/result","GiftController@result")->name('result');
    
    Route::get('/event/history','HistoryController@index')->name('history');
});
Route::get('/cron/mission','Cron\MissionController@index');
