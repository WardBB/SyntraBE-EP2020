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


// Voyager routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Static pages
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

// Contact page
Route::view('/contact', 'contact.create')->name('contact');
Route::post('/contact/send','ContactController@send')->name('sendContact');

// Festival page
Route::get('/festivals','FestivalController@show')->name('festivals');

// Dit is aangesproken via javascript
Route::get('/festivals/{id}', 'FestivalController@item')->name('festivalItem');

// Login page
Route::view('/login', 'authentication.login')->name('login');

Auth::routes();


//favorites page
Route::get('/favorites', 'FavoriteController@index')->name('favorites');

