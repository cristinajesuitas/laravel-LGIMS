<?php

//use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Geocode;
use App\Lguprofile;

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

/*User Manager*/

Route::get('/usermanagement','UsermanagementController@index');

//Route::get('/','UsermanagementController@index');

Route::get('/search','UsermanagementController@search')->name('search.search');

/*  LGU Profile */

Route::get('/lguprofiles', 'LguprofileController@index')->name('lguprofiles.index');
Route::get('/lguprofiles/create','LguprofileController@create')->name('lguprofiles.create');
Route::get('/search','LguprofileController@search')->name('search.search');


Route::get('/lguprofiles/{id}/edit','LguprofileController@edit')->name('lguprofiles.edit');
Route::get('/lguprofiles/{id}/delete','LguprofileController@destroy')->name('lguprofiles.destroy');

Route::post('/create','LguprofileController@store')->name('lguprofiles.store');
Route::post('/Lguprofiles/update','LguprofileController@update')->name('lguprofiles.update');

/*  Geocodes */

Route::post ( '/search', function () {
	$q = Request::get ( 'q' );
	$geocode = Geocode::where ( 'barangay', 'LIKE', '%' . $q . '%' )->orWhere('municipal','LIKE','%'.$q.'%')->get ();
		if (count ( $geocode ) > 0)
			return view ( 'geocodes.index' )->withDetails ( $geocode )->withQuery ( $q );
		else
			return view ( 'geocodes.index' )->withMessage ( 'No Details found. Try to search again !' );

});

Route::get('/geocodes', 'GeocodeController@index')->name('geocodes.index');
Route::get('/geocodes/{id}/edit','GeocodeController@edit')->name('geocodes.edit');
Route::get('/geocodes/{id}/delete','GeocodeController@destroy')->name('geocodes.destroy');
Route::get('/geocodes/create','GeocodeController@create')->name('geocodes.create');
Route::post('/geocodes/create','GeocodeController@store')->name('geocodes.store');
Route::post('/population/update','GeocodeController@update')->name('geocodes.update');

