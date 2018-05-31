<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
  Route::get('/dashboard', 'DashboardController@index');

  Route::get('/dashboard/prueba', 'DashboardController@prueba');

  Route::get('/services/edit', 'ServiceOrdersController@edit');

  Route::get('/services/list', 'ServiceOrdersController@list');

  Route::post('/services/create', 'ServiceOrdersController@create');

  Route::get('/services/works/{serviceOrder}', 'ServiceOrdersController@listWorkOrders');

  Route::get('/clients/register', 'ClientsController@register');

  Route::post('/clients/create', 'ClientsController@create');
