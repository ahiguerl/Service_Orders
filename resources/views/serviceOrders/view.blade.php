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
  <div class="card-body"> {{--Datos Cliente--}}
     <b>Cliente: </b>{{ $workOrders[0]->client_name}} <br>
     <b>Nit: </b>{{ $workOrders[0]->client_id }}
  </div>
  @forelse($workOrders as $workOrder)
    <div class="card">
      <div class="card-header item-list" id="listElement{{$workOrder->id}}" data-toggle="collapse" data-target="#elementContent{{$workOrder->id}}" aria-expanded="false" aria-controls="elementContent{{$workOrder->id}}">
        {{ 'Órden de trabajo # ' . $workOrder->id }}
      </div>

      <div id="elementContent{{$workOrder->id}}" class="collapse" aria-labelledby="listElement{{$workOrder->id}}" data-parent="#list">
        <div class="card-body ">

          <table  class="table table-sm" >
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Detalles</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Fecha</th>
                <td>{{ $workOrder->date}}</td>
              </tr>
              <tr>
                <th scope="row">Item a reparar</th>
                <td>
                  <b>ID: </b>{{ $workOrder->repaired_item_id }} <br>
                  <b>Serial: </b>{{ $workOrder->serial_number }}<br>
                  <b>Detalle: </b>{{ $workOrder->product_name }}
                </td>
              </tr>
              <tr>
                <th scope="row">Descripción</th>
                <td>
                  {{ $workOrder->description}}
                </td>
              </tr>
              <tr>
                <th scope="row">Observaciones</th>
                <td>
                  {{ $workOrder->remark}}
                </td>
              </tr>
              <tr>
                <th scope="row">Estado</th>
                <td>
                  {{ $workOrder->status}}
                </td>
              </tr>
            </tbody>
          </table>
          <div class="text-right">
            <a class="btn btn-primary btn-sm btn-table" href="#" style="width: 200px;"  role="button">Iniciar   </a>
            <a class="btn btn-warning btn-sm btn-table" href="#" style="width: 200px;" role="button">Rechazar</a>
          </div>

        </div>
      </div>
    </div>
  @empty
    {{ 'No hay ninguna órden de servicio activa' }}
  @endforelse
@endsection
