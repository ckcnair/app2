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

/* this is not a good practice to call the route like this
Route::get('/', function () {
  return view('home');
});

Route::get('/about', function(){
  return view('about');
});

Route::get('/contact', function(){
  return view('contact');
});
*/
//Here we created a controller for respective pages, its a good practice
Route::get('/','PagesController@getHome');
Route::get('/about','PagesController@getAbout');
Route::get('/contact','PagesController@getContact');

Route::get('/messages','MessagesController@getMessages');
Route::post('/contact/submit','MessagesController@submit');
