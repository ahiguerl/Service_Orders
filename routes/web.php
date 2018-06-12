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

  Route::get('/prueba', function(){
    return 'hola';
  });

  Route::get('/dashboard/prueba', 'DashboardController@prueba');

  Route::get('/services/edit', 'ServiceOrdersController@edit');

  Route::get('/services/list', 'ServiceOrdersController@list');

  Route::delete('/services/delete/{serviceOrder}', 'ServiceOrdersController@deleteOrder');

  Route::post('/services/create', 'ServiceOrdersController@create');

  Route::get('/services/works/{serviceOrder}', 'ServiceOrdersController@listWorkOrders');

  Route::post('/works/create', 'WorkOrderController@create');

  Route::get('/works/insert', 'WorkOrderController@insert');



  Route::get('/clients/register', 'ClientsController@register');

  Route::post('/clients/create', 'ClientsController@create');

  Route::get('/clients/list', 'ClientsController@list');

  Route::post('/clients/delete/{id}', 'ClientsController@deleteClient');

  Route::delete('/clients/destroy/{id}', 'ClientsController@destroyClient')->name('destroyClient');
