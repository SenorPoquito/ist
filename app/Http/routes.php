<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route Definitions
Route::get('/', function () {
    return view('welcome');
});



//Route rewrite with slug

Route::bind('schools',function($value,$route){
  return App\School::whereSlug($value)->first();
});

//Resrouce Bindings
Route::resource('schools','SchoolController');

//Model Bindings
Route::model('schools','School');
