@extends('layouts.dashboard')

@section('title')
  {{ 'Órdenes de servicio' }}
@endsection

@section('dashboard_title')
  {{ 'Órdenes de servicio' }}
@endsection


@section('sidebar_title')
  {{ 'Menú' }}
@endsection



@section('sidebar_options')
  <div class="menuItem"><a class="menuSubItem" style="color: white;" href="http://localhost:8000/services/create">Crear</a></div>
@endsection




@section('dashboard_content')
  <table class="table table-sm myCardHeader">
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
    <tr class="item-list">
      <th scope="row" style="width: 50px;" class="text-center">{{ $serviceOrder->id }}</th>
      <td style="width: 200px;">{{ $serviceOrder->created_at }}</td>
      <td>{{ $serviceOrder->client_id }}</td>
      <td class="text-right" style="width: 180px;">
        <a class="btn btn-primary btn-sm btn-table" href="http://localhost:8000/services/works/{{ $serviceOrder->id }}" role="button">Ver   </a>
        <a class="btn btn-danger btn-sm btn-table" href="http://localhost:8000/services/edit" role="button">Eliminar</a>
      </td>
    </tr>
    @empty
      {{ 'No hay ninguna órden de servicio activa' }}
    @endforelse
  </tbody>
</table>

<div class="pagination">
  {{ $serviceOrders->links() }}
</div>


@endsection
