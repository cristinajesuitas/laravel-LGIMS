<?php

//use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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
    return view('home');
})->middleware('auth');

Auth::routes(['register' => true]);

Auth::routes();

Route::get('/home', 'HomeController@index');

/*PSGC*/

Route::get('/psgc','PsgcsController@index');

/*PSGC*/

Route::get('/regions','RegionsController@index');



/*  Geocodes */

Route::get('/geocodes', 'GeocodesController@index');
//Route::get('/geocodes','GeocodesController@show');
Route::get('/geocodes/create','GeocodesController@create')->name('geocodes.create');
Route::post('/geocodes','GeocodesController@store')->name('geocodes.store');
Route::get('/geocodes/{geocode}','GeocodesController@show');
Route::get('/geocodes/{id}/edit','GeocodesController@edit')->name('geocodes.edit');
Route::get('/geocodes/{id}/delete','GeocodesController@destroy')->name('geocodes.destroy');

/*  LGU Profile */

Route::get('/lguprofiles', 'LguprofilesController@index');
Route::get('/lguprofiles/create','LguprofilesController@create')->name('lguprofiles.create');
Route::post('/lguprofiles/create','LguprofilesController@store')->name('lguprofiles.store');
Route::get('/search','LguprofileController@search')->name('search.search');


Route::get('/lguprofiles/{id}/edit','LguprofileController@edit')->name('lguprofiles.edit');
Route::get('/lguprofiles/{id}/delete','LguprofileController@destroy')->name('lguprofiles.destroy');


Route::post('/Lguprofiles/update','LguprofileController@update')->name('lguprofiles.update');


//Route::post('/population/update','GeocodeController@update')->name('geocodes.update');

/*User Manager*/

Route::get('/usermanagement','UsermanagementController@index');

//Route::get('/','UsermanagementController@index');

Route::get('/search','UsermanagementController@search')->name('search.search');



/*Enforce change password upon first time login

Route::get('/changePassword','HomeController@showChangePasswordForm');

Route::post('/changePassword','HomeController@changePassword')->name('changePassword');*/







