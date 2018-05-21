<?php

namespace App\Http\Controllers;

use App\WorkOrder;
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


  public function index(ServiceOrder $serviceOrder) {
    //buscar orden por id.
    // $serviceOrder = ServiceOrder::find($id);
    return view('serviceOrders.view', [
      'serviceOrder' => $serviceOrder,
    ]);
  }


  public function create() {
    return 'creado';
  }


  public function list() {
    $serviceOrders = ServiceOrder::all(); // Approach the ORM to get the data form the DB
    return view('serviceOrders.list', [
      'serviceOrders' => $serviceOrders,
    ]);
  }

  public function edit() {
    return 'editado';
  }

  public function listWorkOrders($id) {
    $workOrders = WorkOrder::where('service_order_id', $id)->get();
    return view('serviceOrders.view',[
      'workOrders' => $workOrders, // 'workOrder' será el nombre de la variale que puedo usar en la vista a la hora de listar.
    ]);
  }
}
