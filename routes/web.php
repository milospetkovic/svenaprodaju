<?php

use Illuminate\Support\Facades\Auth;
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

// authentication routes
Auth::routes();

// first page
Route::get('/', function () {
    return view('welcome');
});

// home page
Route::get('/home', 'HomeController@index')->name('home');

// registered user verification route
Route::get('/register/verify/{confirmationCode}', 'Auth\RegisterController@verifyRegistration');

// message/info for fresh registered user to check/confirm email after registration
Route::get('/register/werconfirmation', 'Auth\RegisterController@waitingEmailRegistrationConfirmation');

// create advertisement
Route::get('/oglasi/create', function () {
    return view('advertisement.create');
})->name('advertisementcreate');


