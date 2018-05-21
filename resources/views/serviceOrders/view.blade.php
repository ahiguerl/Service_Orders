@extends('layouts.dashboard')

@section('dashboard_title')
  {{ 'Órden de servicio #' . $workOrders[0]->service_order_id}}
  {{-- {{ dd($workOrders)}} --}}
@endsection


@section('sidebar_title')
  {{ 'Menú' }}
@endsection



@section('sidebar_options')
  <div class="menuItem"><a class="menuSubItem" style="color: white;" href="http://localhost:8000/service-orders/list">Volver</a></div>
@endsection



@section('dashboard_content')
  @foreach($workOrders as $workOrder)
  <div class="card">
    <div class="card-header item-list" id="listElement{{$workOrder->id}}" data-toggle="collapse" data-target="#elementContent{{$workOrder->id}}" aria-expanded="false" aria-controls="elementContent{{$workOrder->id}}">
      {{ 'Órden de trabajo # ' . $workOrder->id }}
    </div>

    <div id="elementContent{{$workOrder->id}}" class="collapse" aria-labelledby="listElement{{$workOrder->id}}" data-parent="#list">
      <div class="card-body ">
        {{'Descripción: ' . $workOrder->description}} <br>
        {{'Item a reparar: ' . $workOrder->repaired_item_id}} <br>
        {{'Estado: ' . $workOrder->order_status_id}} <br>

      </div>
    </div>
  </div>
  @endforeach
@endsection
