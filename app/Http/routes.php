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
    Route::resource('department', 'ApiV1\DepartmentsController', ['except' => ['edit', 'create']]);
    Route::resource('knowledge', 'ApiV1\KnowledgeController', ['except' => ['edit', 'create']]);


    Route::get('customers', 'ApiCustomerController@index');
    Route::get('customers/{id}', 'ApiCustomerController@show');
    Route::put('customers/{id}', 'ApiCustomerController@update');
    Route::post('customers', 'ApiCustomerController@insert');
    Route::patch('customers/{id}', 'ApiCustomerController@update');
    Route::delete('customers/{id}', 'ApiCustomerController@destroy');
});

// WEB ROUTES.
// TODO needs testing
Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('index');

// Auth routes.
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::get('logout', 'Auth\AuthController@logout');
Route::post('login', 'Auth\AuthController@login');
//Route::auth();

// Department routes.
Route::get('departments', 'DepartmentController@index')->name('department.index');
Route::get('/departments/search', 'DepartmentController@index')->name('department.search');
Route::get('/departments/update/{id}', 'DepartmentController@edit')->name('department.edit');
Route::get('/departments/show/{id}', 'DepartmentController@show')->name('department.specific');
Route::get('/departments/new', 'DepartmentController@register')->name('department.register');
Route::get('/departments/delete/{id}', 'DepartmentController@destroy')->name('department.destroy');
Route::post('/departments/create', 'DepartmentController@create')->name('department.store');
Route::post('/departments/update/{id}', 'DepartmentController@update')->name('department.update');

// Products routing
// TODO: needs testing
Route::get('/products', 'ProductsController@index')->name('products.index');
Route::post('/products/category/new', 'ProductsController@storeCategory')->name('category.insert');


// Inbound email routes.
// TODO: Needs testing.
Route::get('emails', 'InboundEmail@index')->name('emails.index');
Route::get('/emails/search', 'InboundEmail@index')->name('emails.search');
Route::get('/emails/show/{id}', 'InboundEmail@show')->name('emails.specific');

// Account info routes.
// TODO: Needs testing.
Route::get('/account/update/{tab}', 'AccountController@Account')->name('account.info');
Route::get('/account/api/removeKey/{id}', 'AccountController@removeApiKey')->name('account.api.destroy');
Route::post('/account/update/password', 'AccountController@updateAccountSecurity')->name('account.update.pass');
Route::post('/account/api/newKey', 'AccountController@createApiKey')->name('account.create.api');
Route::post('/account/update/information', 'AccountController@updateAccountInformation')->name('account.update.info');

// Dedicated servers routes
// TODO: Needs testing.
Route::get('/dedicatedservers',  'DedicatedServersController@index')->name('dedicatedservers.index');
Route::get('/dedicatedservers/register',  'DedicatedServersController@register')->name('dedicatedservers.register');
Route::post('/dedicatedservers/save', 'DedicatedServersController@store')->name('dedicatedservers.store');
Route::get('/dedicatedservers/destroy/{id}', 'DedicatedServersController@destroy')->name('dedicatedservers.destroy');
Route::get('/dedicatedservers/update/{id}', 'DedicatedServersController@update')->name('dedicatedservers.update');
Route::post('/dedicatedservers/update/{id}', 'DedicatedServersController@update')->name('dedicatedservers.update');



// Staff routes
Route::get('/setup/staff',  'StaffController@index')->name('staff.index');
Route::get('/staff/create',  'StaffController@register')->name('staff.register');
Route::get('/staff/destroy/{id}', 'StaffController@destroy')->name('staff.destroy');
Route::post('/staff/create', 'StaffController@store')->name('staff.store');

// Knowledge routing
Route::get('/knowledge', 'KnowledgeBaseController@index')->name('knowledge.index');
Route::get('/knowledge/search', 'KnowledgeBaseController@index')->name('knowledge.search');
Route::get('/knowledge/destroy/{id}', 'KnowledgeBaseController@destroy')->name('knowledge.destroy');
Route::get('/knowledge/edit/{id}', 'KnowledgeBaseController@edit')->name('knowledge.edit');
Route::get('/knowledge/register', 'KnowledgeBaseController@register')->name('knowledge.register');
Route::get('/knowledge/question/{id}', 'KnowledgeBaseController@show')->name('knowledge.show');
Route::post('/knowledge/register', 'KnowledgeBaseController@store')->name('knowledge.store');
Route::post('/knowledge/edit/{id}', 'KnowledgeBaseController@update')->name('knowledge.update');

// Customer routes.
Route::get('/customers', 'CustomerController@index')->name('customers.list');
Route::get('/customers/search', 'CustomerController@index')->name('customer.search');
Route::get('/customers/create', 'CustomerController@newCustomer')->name('customer.create');
Route::get('/customer/destroy/{id}', 'CustomerController@destroy')->name('customer.destroy');
Route::get('/customer/update/{id}', 'CustomerController@edit')->name('customer.edit');
Route::post('/customer/update/{id}', 'CustomerController@update')->name('customer.update');
Route::post('/customer/create', 'CustomerController@create')->name('customer.insert');

// Server routes
Route::get('/servers', 'ServerController@index')->name('server.index');
Route::get('/servers/destroy/{id}', 'ServerController@destroy')->name('server.destroy');
Route::get('/servers/create', 'ServerController@register')->name('server.create');

// Tickets routes
// TODO: Needs testing
Route::get('/tickets', 'TicketsController@index')->name('tickets.index');
Route::get('/tickets/create', 'TicketsController@create')->name('tickets.created');
Route::post('/tickets/create', 'TicketsController@save')->name('tickets.save');

Route::get('/tickets/destroy/{id}', 'TicketsController@destroy')->name('tickets.destroy');
Route::get('/tickets/assigned', 'TicketsController@assigned')->name('tickets.assigned');
Route::get('/tickets/details/{id}', 'TicketsController@details')->name('tickets.details');
Route::get('/tickets/reopen/{id}', 'TicketsController@reopen')->name('tickets.reopen');
// Route::post('/tickets/quickUpdateTicket', 'TicketsController@update')->name('tickets.update');
Route::post('/tickets/quickUpdateTicket/{id}', 'TicketsController@update')->name('tickets.qupdate');

Route::get('/setup/tickets/topics', 'TicketsController@topics')->name('tickets.topics');
Route::get('/setup/tickets/topics/register', 'TicketsController@addTopic')->name('tickets.addtopic');
Route::post('/setup/tickets/topics/save', 'TicketsController@saveTopic')->name('tickets.savetopic');

// API settings routes
// TODO: Needs testing.
Route::get('/api/key/logs/{id}', 'AccountController@getApiLogs')->name('account.api.logs');

// ticket comments
Route::post('/comment/{id}', 'TicketsController@ticketReply')->name('comment.reply');

// Setup routes
Route::get('/setup', 'SetupController@index')->name('setup.index');
Route::get('/setup/ticketrouting', 'TicketsController@manageRouting')->name('tickets.routing');
Route::get('/setup/ticketrouting/create', 'TicketsController@addRouting')->name('tickets.addrouting');
Route::post('/setup/ticketrouting/save', 'TicketsController@saveRouting')->name('tickets.saveRouting');

Route::get('/setup/staff/roles', 'StaffController@roles')->name('staff.roles');
