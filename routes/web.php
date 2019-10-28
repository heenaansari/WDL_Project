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


Auth::routes();
//Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/', 'UsermeController@homee')->name('homee');


Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contactus', 'ContactController@create')->name('contactus');
Route::get('/viewuser', 'UsermeController@index')->name('viewuser');



Route::get('/adminhome', 'AdminController@index')->name('adminhome');
Route::get('/adminhome/viewuser', 'UsermeController@index')->name('adminviewuser');
Route::get('/adminhome/showbookings', 'AdminController@showbooking')->name('showbookings');
Route::get('/adminhome/viewcontact', 'AdminController@showcontact')->name('contact');
Route::get('/viewcontact', 'AdminController@showcontact')->name('viewcontact');

Route::get('/adminhome/crud', 'CrudsController@index')->name('crud');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', 'WelcomeController@index')->name('welcome');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
Route::get('/indexbook','IndexController@index')->name('indexbook');
     


Route::resource('crud','CrudsController');

Route::resource('books', 'BookController');



Route::resource('contacts', 'ContactController');
