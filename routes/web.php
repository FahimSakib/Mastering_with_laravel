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

// Frontend Routes:

Route::get('/', 'frontend\HomeController@index');
Route::get('about', 'frontend\AboutController@index')->name('about');
Route::get('properties', 'frontend\PropertiesController@index')->name('properties');
Route::get('blog', 'frontend\BlogController@index')->name('blog');
Route::get('contact', 'frontend\ContactController@index')->name('contact');

// End Frontend Routes

// Bacckend Routes:

Route::group(['prefix' => 'admin', 'as' => 'admin'], function(){
    Route::get('/', 'Backend\DashboardController@index');
    Route::get('about', 'Backend\AboutController@index')->name('about');
    Route::get('properties', 'Backend\PropertiesController@index')->name('properties');
    Route::get('blog', 'Backend\BlogController@index')->name('blog');
    Route::get('contact', 'Backend\ContactController@index')->name('contact');
    Route::get('login', 'Backend\LogInController@index')->name('login');
});

// End Bacckend Routes



