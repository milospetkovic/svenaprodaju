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

/* Advertisement */
// view create form for advertisement
Route::get('/oglasi/create', 'AdvertisementController@viewCreateForm')->name('advertisementcreate');
// save advertisement
Route::post('/oglasi/create', 'AdvertisementController@saveForm')->name('advertisementcreate');
// view advertisement
Route::get('/oglasi/view/{id}/{advslug?}', 'AdvertisementController@viewAdvertisement')->name('advertisementview');
// view list of my advertisement
Route::get('/mojioglasi/list', 'AdvertisementController@myAdvertisementList')->name('myadvertisementlist');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
