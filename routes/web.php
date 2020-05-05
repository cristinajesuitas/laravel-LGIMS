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

/*PSGC*/

Route::get('psgc', 'RegionsController@index')->name('regions.index');
Route::post('psgc','RegionsController@store');
//Route::put('psgc','RegionsController@update');
//Route::get('psgc/{region}','RegionsController@show');
//Route::get('psgc','RegionsController@create');


