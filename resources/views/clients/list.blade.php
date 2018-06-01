@extends('layouts.dashboard')

@section('alerts')
  {{-- @if (session('danger'))
    <div class="alert alert-danger text-center">
        {{ session('danger') }}
    </div>
  @endif

  @if (session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
  @endif --}}
  <div id="alert" class="alert alert-success"></div>
@endsection
{{-- corregirr --}}


@section('title')
  {{ 'Clientes' }}
@endsection

@section('dashboard_title')
  {{ 'Clientes' }}
@endsection


@section('sidebar_title')
  {{ 'Menú' }}
@endsection



@section('sidebar_options')
  <div class="menuItem"><a class="menuSubItem" style="color: white;" href="/dashboard">Volver</a></div>
@endsection




@section('dashboard_content')
  <table class="table table-sm myCardHeader">
  <thead>
    <tr>
      <th scope="col">Nit</th>
      <th scope="col">Nombre</th>
      <th scope="col">Teléfono</th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody>
    @forelse($clients as $client)
    <tr class="item-list">
      <th scope="row" style="width: 70px;" class="text-center">{{ $client->id }}</th>
      <td style="width: 200px;">{{ $client->name }}</td>
      <td>{{ $client->phone }}</td>
      <td class="text-right" style="width: 180px;">
        {{-- <a class="btn btn-primary btn-sm btn-table" href="/services/works/{{ $client->id }}" role="button" >Ver   </a> --}}
        {{-- <button class="btn btn-danger btn-sm btn-table"  >
          <a href="/clients/delete/{{ $client->id }}" style="color: white;" >Eliminar</a>
        </button> --}}

        {!! Form::open([
          'route' => ['destroyClient', $client->id],
          'method' => 'DELETE']) !!}
          
          <a href="#" class="btn btn-danger btn-sm btn-delete" title="Eliminar">
            Eliminar
          </a>
        {!! Form::close() !!}

      </td>
    </tr>
    @empty
      {{ 'No hay ningún cliente' }}
    @endforelse
  </tbody>
</table>

<div class="pagination">
  {{ $clients->links() }}
</div>
@endsection


@section('scripts')
  <script src="{{ asset('js/script.js') }}"></script>
@endsection
