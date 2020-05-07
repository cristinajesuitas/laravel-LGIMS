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
|   // GET is for showing all or specific resource may that for creating a new or
            editing existing resource (
                GET /articles;
                GET /articles/:id;
                GET /articles/create;
            )
|   // POST is for storing a new or existing resource (POST /articles;)
|   // PUT is for updating an specific resource (PUT /articles/:id;)
|   // DELETE is for deleting an specidic resource (DELETE /articles/:id;)
{{ $error->has('title') ? true-value : false-value }}
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes(['register' => true]);

Auth::routes();

Route::get('home', 'HomeController@index');

Route::get('regions','RegionsController@index');
Route::get('regions/{$region}/edit','RegionsController@edit')->name('regions.edit');

/*PSGC*/

Route::get('psgc', 'RegionsController@index')->name('regions.index');
//Route::resource('/psgc','RegionsController@edit')->name('regions.edit');
Route::post('psgc','RegionsController@store')->name('regions.store');
Route::put('psgc','RegionsController@update')->name('regions.update');
//Route::get('psgc/{region}','RegionsController@show')->name('regions.show');
//Route::get('psgc/{region}/edit','RegionsController@edit')->name('regions.edit');
//Route::get('psgc','RegionsController@create');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
