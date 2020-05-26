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

Route::get('/', function () {
    return view('welcome');
});

//voyager routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//static pages
Route::view('/home', 'home')->name('home');
Route::view('/about', 'about')->name('about');

//contact page
Route::view('/contact', 'contact.create')->name('contact');
Route::post('/contact/send','ContactController@send')->name('sendContact');

//festival page
Route::get('/festivals','FestivalController@show')->name('festivals');



