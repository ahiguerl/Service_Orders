<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; // Importante para poder aplicar las consultas de agregación
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

  // public function listWorkOrders($id) {
  //   $workOrders = WorkOrder::where('service_order_id', $id)->get();
  //   return view('serviceOrders.view',[
  //     'workOrders' => $workOrders, // 'workOrder' será el nombre de la variale que puedo usar en la vista a la hora de listar.
  //   ]);
  // }

  public function listWorkOrders($id) {
    // $workOrders = WorkOrder::where('service_order_id', $id)->get();

    $workOrders = DB::table('service_orders')
              ->join('clients', 'service_orders.client_id', '=', 'clients.id')
              ->join('work_orders', 'service_orders.id', '=', 'work_orders.service_order_id')
              ->join('repaired_items', 'work_orders.repaired_item_id', '=', 'repaired_items.id')
              ->join('products', 'repaired_items.product_id', '=', 'products.id')
              ->join('order_statuses', 'work_orders.order_status_id', '=', 'order_statuses.id')
              ->select('service_orders.*', 'clients.name as client_name', 'work_orders.*', 'products.description as product_name', 'repaired_items.*',
              'order_statuses.name as status')
              ->where('service_order_id', $id)
              ->get();

    return view('serviceOrders.view',[
      'workOrders' => $workOrders, // 'workOrder' será el nombre de la variale que puedo usar en la vista a la hora de listar.
    ]);
  }



}
