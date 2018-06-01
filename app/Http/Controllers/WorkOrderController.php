<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkOrderController extends Controller
{

    public function create(Request $request){

      $workOrder = WorkOrder::Create(){

        'order_status_id' => 1,
        'description' => $request['description'],
        'remark' => $request['remark'],
        'service_order_id' => $request['service_Id'],
        'repaired_item_id' => $request['repaired_item_id'],

      }
      return redirect('/services/works/' . $workOrder->service_order_id);

    }
}
