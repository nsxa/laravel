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

Route::resource('tictactoe','App\http\Controllers\tictactoe');


Route::resource('login','App\http\Controllers\login');

Route::resource('dashboard','App\http\Controllers\dashboard');

Route::resource('dashboardcommerce','App\http\Controllers\dashboardcommerce');



Route::post('post-login','App\http\Controllers\login@postLogin');



/*Route::post('post-login', 'AuthController@postLogin'); 
  Route::get('registration', 'AuthController@registration');
  Route::post('post-registration', 'AuthController@postRegistration'); 
  Route::get('dashboard', 'AuthController@dashboard'); 
  Route::get('logout', 'AuthController@logout');*/
  