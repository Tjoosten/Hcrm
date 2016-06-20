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

Route::get('/', 'HomeController@index')->name('index');
Route::auth();

Route::get('/home', 'HomeController@index')->name('index');

// Department routes.
Route::get('departments', 'DepartmentController@index')->name('department.index');
Route::post('/departments/create', 'DepartmentController@create')->name('department.store');
Route::get('/departments/update/{id}', 'DepartmentController@update')->name('department.update');
Route::get('/departments/delete/{id}', 'DepartmentController@destroy')->name('department.destroy');

// Account info routes.
Route::get('/account/update', 'AccountController@Account')->name('account.info');
Route::post('/account/update/information', 'AccountController@updateAccountInformation')->name('account.update.info');
Route::post('/account/update/password', 'AccountController@updateAccountSecurity')->name('account.update.pass');

// Customer routes.
Route::get('/customers', 'CustomerController@list')->name('customers.list');
Route::post('/customer/update/{id}', 'CustomerController@update')->name('customer.update');
Route::post('/customer/create', 'CustomerController@create')->name('customer.insert');
Route::get('/customer/destroy/{id}', 'CustomerController@destroy')->name('customer.destroy');

// Tickets routes
Route::get('/tickets', 'TicketsController@index')->name('tickets.index');
Route::get('/tickets/assigned', 'TicketsController@assigned')->name('tickets.assigned');
