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
Route::group(['middleware'=>['auth']],function(){


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

    Route::resource('vaccination/program','VaccinationProgramController');
    Route::get('vaccination/program/vaccine/list/{id}',['as'=>'vaccination/program/vaccine/list','uses'=>'VaccinationProgramController@vaccineList']);


/* ------------------------------------------------------------------------
            Location (Address)
--------------------------------------------------------------------------*/
    Route::get('location/district/{id}','LocationController@getDistrict');
    Route::get('location/zone','LocationController@getZone');

/* -------------------------------------------------------------------------------
 *  User management Module  Routes
 * -------------------------------------------------------------------------------*/
Route::resource('users','UserController');

/* -------------------------------------------------------------------------------
 *  User management Module  Routes
 * ------------------------------------------------------------------------------- */

    Route::resource('roles','RoleController');
    Route::get('/role/getAll','RoleController@getAll');
    Route:get('/assign/permissions/{id}','RoleController@assignPermission');

/*------------------------------------------------------------------------------------
 *  Role and Permission management
 ------------------------------------------------------------------------------------*/

    Route::resource('role_permission','RolePermissionController');
    Route::get('getPermissions/{id}','RolePermissionController@getPermission');

    /*
     * Education Modules
     */
    Route::resource('educations','EducationController');
});