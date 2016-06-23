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

// API ROUTES.
Route::group(['prefix' => 'api/v1'], function () {
    Route::get('customers', 'ApiCustomerController@index');
    Route::get('customers/{id}', 'ApiCustomerController@show');
    Route::put('customers/{id}', 'ApiCustomerController@update');
    Route::post('customers', 'ApiCustomerController@insert');
    Route::patch('customers/{id}', 'ApiCustomerController@update');
    Route::delete('customers/{id}', 'ApiCustomerController@destroy');
});

// WEB ROUTES.
Route::get('/', 'HomeController@index')->name('index');
Route::auth();

Route::get('/home', 'HomeController@index')->name('index');

// Department routes.
Route::get('departments', 'DepartmentController@index')->name('department.index');
Route::get('/departments/delete/{id}', 'DepartmentController@destroy')->name('department.destroy');
Route::post('/departments/create', 'DepartmentController@create')->name('department.store');
Route::post('/departments/update/{id}', 'DepartmentController@update')->name('department.update');

// Account info routes.
Route::get('/account/update/{tab}', 'AccountController@Account')->name('account.info');
Route::get('/account/api/removeKey/{id}', 'AccountController@removeApiKey')->name('account.api.destroy');
Route::post('/account/update/password', 'AccountController@updateAccountSecurity')->name('account.update.pass');
Route::post('/account/api/newKey', 'AccountController@createApiKey')->name('account.create.api');
Route::post('/account/update/information', 'AccountController@updateAccountInformation')->name('account.update.info');

// Customer routes.
Route::get('/customers', 'CustomerController@index')->name('customers.list');
Route::get('/customers/search', 'CustomerController@index')->name('customer.search');
Route::get('/customers/create', 'CustomerController@newCustomer')->name('customer.create');
Route::get('/customer/destroy/{id}', 'CustomerController@destroy')->name('customer.destroy');
Route::get('/customer/update/{id}', 'CustomerController@edit')->name('customer.edit');
Route::post('/customer/update/{id}', 'CustomerController@update')->name('customer.update');
Route::post('/customer/create', 'CustomerController@create')->name('customer.insert');

// Tickets routes
Route::get('/tickets', 'TicketsController@index')->name('tickets.index');
Route::get('/tickets/create', 'TicketsController@create')->name('tickets.created');
Route::get('/tickets/assigned', 'TicketsController@assigned')->name('tickets.assigned');

// API settings routes 
Route::get('/api/key/logs/{id}', 'AccountController@getApiLogs')->name('account.api.logs');

// Setup routes
Route::get('/setup', 'SetupController@index')->name('setup.index');