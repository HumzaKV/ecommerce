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

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registration-form', 'RegisterController@index')->name('registration-form');
Route::post('/store', 'RegisterController@store')->name('store');

Route::get('email-test', function(){
  
    $details['email'] = 'omais.kv@gmail.com';
  
    dispatch(new App\Jobs\SendEmailJob($details))->delay(now()->addSeconds(5));
  
    dd('Email Has Been Sent Successfully!');
});


Route::get('/home', 'HomeController@index')->name('home');
