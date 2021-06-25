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

Route::get('/loginn','LoginController@log');
 Route::post('/loginn','LoginController@verify');


    Route::get('/customerhomepage','CustomerController@home');
    Route::get('/deathnote','CustomerController@death');
    Route::get('/naruto','CustomerController@naru');
    Route::get('/onepiece','CustomerController@one');
    Route::get('/bleach','CustomerController@blea');

    Route::get('patherpachali','CustomerController@patherpachal');
    Route::get('/agnibeena','CustomerController@agnibeen');
    Route::get('/cn','CustomerController@cnet');
    Route::get('/html','CustomerController@htmll');


    Route::get('/weeklypay','PaymentController@weeklypay');
    Route::get('/monthlypay','PaymentController@monthlypay');
    Route::get('/yearlypay','PaymentController@yearlypay');

     Route::get('/profile3','ProfileController@profile');
      Route::get('/updateprofile3','ProfileController@uprofile');

