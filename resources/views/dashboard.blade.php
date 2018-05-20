@extends('layouts.dashboard')

@section('sidebar_title')
  {{ 'Menú' }}
@endsection



@section('sidebar_options')
  <div class="menuItem" id="menuItem1" data-toggle="collapse" data-target="#menuSubItem1" aria-expanded="false" aria-controls="menuSubItem1">
    Órdenes de Servicio
  </div>
  <div id="menuSubItem1" class="collapse" aria-labelledby="menuItem1" data-parent="#sidenav-menu">
      <div class="menuItem"><a class="menuSubItem" style="color: white;" href="http://localhost:8000/service-orders/create">Crear</a></div>
      <div class="menuItem"><a class="menuSubItem" style="color: white;" href="http://localhost:8000/service-orders/list">Listar</a></div>
      <div class="menuItem"><a class="menuSubItem" style="color: white;" href="#">Modificar</a></div>
  </div>

  <div class="menuItem" id="menuItem2" data-toggle="collapse" data-target="#menuSubItem2" aria-expanded="false" aria-controls="menuSubItem2">
    Clientes
  </div>
  <div id="menuSubItem2" class="collapse" aria-labelledby="menuItem2" data-parent="#sidenav-menu">
    <div class="menuItem"><a class="menuSubItem" style="color: white;" href="">Crear</a></div>
    <div class="menuItem"><a class="menuSubItem" style="color: white;" href="#">Listar</a></div>
    <div class="menuItem"><a class="menuSubItem" style="color: white;" href="#">Modificar</a></div>
  </div>
@endsection




@section('dashboard_content')
  <div class="card">
    <div class="card-header item-list" id="listElement1" data-toggle="collapse" data-target="#elementContent1" aria-expanded="false" aria-controls="elementContent1">
      Collapsible Group Item #1
    </div>

    <div id="elementContent1" class="collapse" aria-labelledby="listElement1" data-parent="#list">
      <div class="card-body ">
        elementos a listar
      </div>
    </div>
  </div>
@endsection
