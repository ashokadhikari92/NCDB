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

//Route::get('/', 'WelcomeController@index');
Route::get('/', 'BirthDetailController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/', 'BirthDetailController@index');

Route::resource('dashboard','DashboardController');

/* ------------------------------------------------------------------------
             Birth Details
--------------------------------------------------------------------------*/
Route::resource('birth_details','BirthDetailController');
Route::get('delete/birth_details/{id}','BirthDetailController@destroy');
Route::get('birth/details',array('as'=>'birth/details','uses'=>'BirthDetailController@getAllData'));

/* ------------------------------------------------------------------------
            Vaccination
--------------------------------------------------------------------------*/
Route::resource('child_vaccines','ChildVaccineController');
Route::get('delete/child/vaccine/{id}','ChildVaccineController@destroy');
Route::get('child/vaccines/details',array('as'=>'child/vaccines/details','uses'=>'ChildVaccineController@getAllChildVaccines'));


/* ------------------------------------------------------------------------
            Location (Address)
--------------------------------------------------------------------------*/
Route::get('location/district/{id}','LocationController@getDistrict');