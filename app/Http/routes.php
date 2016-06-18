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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

// Department routes
Route::get('/departments/delete/{id}', 'DepartmentController@destroy')->name('department.destroy');

// Account info routes.
Route::post('/account/update/information', 'AccountController@updateAccountInformation')->name('account.update.info');
Route::post('/account/update/password', 'AccountController@updateAccountSecurity')->name('account.update.pass');

// Customer routes.
Route::post('/customer/update/{id}', 'CustomerController@update')->name('customer.update');
Route::post('/customer/create', 'CustomerController@create')->name('customer.insert');
Route::get('/customer/destroy/{id}', 'CustomerController@destroy')->name('customer.destroy');
