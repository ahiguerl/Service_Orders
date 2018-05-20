@extends('layouts.dashboard')

@section('sidebar_title')
  {{ 'Órdenes de servicio' }}
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
      <th scope="row">{{ $serviceOrder->id }}</th>
      <td>{{ $serviceOrder->date }}</td>
      <td>{{ $serviceOrder->client_id }}</td>
      <td class="text-right">
        <a class="btn btn-primary btn-sm" href="http://localhost:8000/service-orders" role="button">Ver   </a>
        <a class="btn btn-warning btn-sm" href="http://localhost:8000/service-orders/edit" role="button">Editar</a>
      </td>
    </tr>
    @empty
      {{ 'No hay ninguna órden de servicio activa' }}
    @endforelse
  </tbody>
</table>




@endsection
