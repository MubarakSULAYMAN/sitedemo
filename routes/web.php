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
Route::get('/home', 'PagesController@getHome');

//shop
// Route::resource('/explore', 'ProductController', ['only' => ['index', 'show']]);
// Route::resource('shop', 'CartController', ['only' => ['index', 'store', 'update', 'destroy']]);

Route::get('/login', 'PagesController@getLogin');
Route::get('/contact', 'PagesController@getContact');
Route::get('/register', 'PagesController@getSignup');

Route::get('/customize', 'PagesController@getCustomize');
Route::resource('customize', 'CustomizeController');

Route::get('/be_student', 'PagesController@getBeStudent');
Route::get('/arrivals', 'PagesController@getArrivals');
Route::get('/explore', 'PagesController@getExplore');

//must login to access
Route::get('/customize', ['middleware' => 'auth', 'uses' => 'PagesController@getCustomize']);
Route::get('/cart', ['middleware' => 'auth', 'uses' => 'PagesController@getCart']);

// admin get submiitted messages
Route::get('/messages', 'MessagesController@getMessages');

// submit contact
Route::post('/contact/submit', 'MessagesController@submit');

// customize submission                  
Route::get('/customizes', 'CustomizeController@getCustoms');
Route::post('/customize/getme', 'CustomizeController@getme');

Route::get('/home', 'HomeController@index')->name('home');

// Login and register
Route::get('/login', 'SessionsController@create');
Route::get('/register', 'RegisterController@create');

// Login with email or username
Auth::routes();
Route::get('activate/{token}', 'Auth\RegisterController@activate')->name('activate');

// For admin
Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function()
{
    Route::get('/', 'AdminController@index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
