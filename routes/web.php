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
  Route::get('/service-orders/list', 'ServiceOrdersController@list');
  Route::get('/service-orders/create', 'ServiceOrdersController@create');
  Route::get('/service-orders/edit', 'ServiceOrdersController@edit');
