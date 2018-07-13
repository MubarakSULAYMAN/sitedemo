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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@getHome');
Route::get('/login', 'PagesController@getLogin');
Route::get('/contact', 'PagesController@getContact');
Route::get('/signup', 'PagesController@getSignup');
// Route::get('/', 'PagesController@getHome');
// Route::get('/', 'PagesController@getHome');

Route::get('/messages', 'MessagesController@getMessages');
Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/home', 'HomeController@index')->name('home');

// Login and register
Route::get('/login', 'SessionsController@create');
Route::get('/register', 'RegisterController@create');

// Login with email or username
Auth::routes();
Route::get('activate/{token}', 'Auth\RegisterController@activate')->name('activate');

