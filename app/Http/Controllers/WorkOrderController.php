<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkOrder;

class WorkOrderController extends Controller
{

  public function create(Request $request){

    $workOrder = WorkOrder::Create([
      'order_status_id' => 1,
      'description' => $request['description'],
      'remark' => $request['remark'],
      'service_order_id' => $request['service_Id'],
      'repaired_item_id' => $request['item'],
    ]);
    return redirect('/services/list');
  }

  public function insert(){
    return view('workOrders.create');
  }

}
