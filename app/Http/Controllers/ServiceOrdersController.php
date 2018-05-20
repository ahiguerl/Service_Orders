<?php

namespace App\Http\Controllers;

use App\ServiceOrder;
use Illuminate\Http\Request;

class ServiceOrdersController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct() {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */


  public function index() {
    //
  }

  public function create() {
    return 'creado';
  }

  public function list() {
    $serviceOrders = ServiceOrder::all(); // Approach the ORM to get the data form the DB
    return view('serviceOrders/list', [
      'serviceOrders' => $serviceOrders,
    ]);
  }
}
