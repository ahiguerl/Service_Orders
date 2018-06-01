<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; // Importante para poder aplicar las consultas de agregación
use App\WorkOrder;
use App\ServiceOrder;
use App\Client;

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




  public function create(Request $request) {
    if (Client::find($request['id'])) {
      $serviceOrder = ServiceOrder::create([
        'client_id' => $request['id'],
        'is_open' => 1,
      ]);
      return redirect('/works/insert')->with('serviceId', $serviceOrder->id ); // envío del parámetro através de la sesión
    } else{
      return redirect('/dashboard')->with('danger', 'El cliente no existe o no se digitó correctamente.');
    }
  }


  public function list() {
    $serviceOrders = ServiceOrder::paginate(10); // Approach the ORM to get the data form the DB
    return view('serviceOrders.list', [
      'serviceOrders' => $serviceOrders,
    ]);
  }

  public function edit() {
    return 'editado';
  }

  public function deleteOrder($id) {
    // if () {
    //   // code...
    // } else {
    //   // code...
    // }

    $workOrders = DB::table('service_orders')
    ->join('work_orders', 'service_orders.id', '=', 'work_orders.service_order_id')
    ->select('*')
    ->where('service_order_id', $id)->delete();

    // return redirect('/services/list');
  }

  public function listWorkOrders($id) {
    // $workOrders = WorkOrder::where('service_order_id', $id)->get();

    $workOrders = DB::table('service_orders')
    ->join('clients', 'service_orders.client_id', '=', 'clients.id')
    ->join('work_orders', 'service_orders.id', '=', 'work_orders.service_order_id')
    ->join('repaired_items', 'work_orders.repaired_item_id', '=', 'repaired_items.id')
    ->join('products', 'repaired_items.product_id', '=', 'products.id')
    ->join('order_statuses', 'work_orders.order_status_id', '=', 'order_statuses.id')
    ->select('service_orders.*', 'clients.name as client_name', 'work_orders.*', 'products.description as product_name', 'repaired_items.*',
    'order_statuses.id as status')
    ->where('service_order_id', $id)
    ->simplePaginate(15);

    return view('serviceOrders.view',[
      'workOrders' => $workOrders, // 'workOrder' será el nombre de la variale que puedo usar en la vista a la hora de listar.
    ]);

  }

}
