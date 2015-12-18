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

use App\School;
use App\Grade;
use App\Ward;
//Route Definitions
// work page (app/views/work.blade.php)
  Route::get('/', array('as' => 'home', function()
  {
      return View::make('index');
  }));

//Model Bindings
Route::model('schools','School');
Route::model('wards','Ward');
Route::model('grades','Grade');

//Route rewrite with slug
Route::bind('schools',function($value,$route){
  return School::whereSlug($value)->first();
});
Route::bind('wards',function($value,$route){
  return Ward::whereSlug($value)->first();
});
Route::bind('grades',function($value,$route){
  return Grade::whereSlug($value)->first();
});

//Resrouce Bindings
Route::resource('schools','SchoolController');
Route::resource('wards','WardController');
Route::resource('grades','GradeController');
