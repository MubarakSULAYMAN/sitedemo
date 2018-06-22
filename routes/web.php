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

Route::get('', function () {
    return view('home');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/customize', function () {
    return view('customize');
});

Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');