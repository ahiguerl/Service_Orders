@extends('layouts.dashboard')

@section('title')
  {{ 'Dashboard' }}
@endsection

@section('dashboard_title')
  {{ 'Órdenes de servicio' }}
@endsection


@section('sidebar_title')
  {{ 'Menú' }}
@endsection



@section('sidebar_options')
  <div class="menuItem"><a class="menuSubItem" style="color: white;" href="http://localhost:8000/service-orders/create">Crear</a></div>
@endsection




@section('dashboard_content')
  <table class="table table-sm table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fecha</th>
      <th scope="col">Cliente</th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody>
    @forelse($serviceOrders as $serviceOrder)
    <tr>
      <th scope="row" style="width: 50px;" class="text-center">{{ $serviceOrder->id }}</th>
      <td style="width: 200px;">{{ $serviceOrder->date }}</td>
      <td>{{ $serviceOrder->client_id }}</td>
      <td class="text-right" style="width: 180px;">
        <a class="btn btn-primary btn-sm btn-table" href="http://localhost:8000/service-orders/{{ $serviceOrder->id }}/work" role="button">Ver   </a>
        <a class="btn btn-warning btn-sm btn-table" href="http://localhost:8000/service-orders/edit" role="button">Editar</a>
      </td>
    </tr>
    @empty
      {{ 'No hay ninguna órden de servicio activa' }}
    @endforelse
  </tbody>
</table>




@endsection