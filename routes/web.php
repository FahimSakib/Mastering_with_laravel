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

Route::get('/', 'frontend\HomeController@index');
Route::get('about', 'frontend\AboutController@index')->name('about');
Route::get('properties', 'frontend\PropertiesController@index')->name('properties');
Route::get('blog', 'frontend\BlogController@index')->name('blog');
Route::get('contact', 'frontend\ContactController@index')->name('contact');



