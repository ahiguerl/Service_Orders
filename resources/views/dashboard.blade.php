@extends('layouts.dashboard')

@section('title')
  {{ 'Dashboard' }}
@endsection

@section('dashboard_title')
  {{ 'Dashboard' }}
@endsection

@section('sidebar_title')
  {{ 'Menú' }}
@endsection



@section('sidebar_options')
  <div class="menuItem" id="menuItem1" data-toggle="collapse" data-target="#menuSubItem1" aria-expanded="false" aria-controls="menuSubItem1">
    Órdenes de Servicio
  </div>
  <div id="menuSubItem1" class="collapse" aria-labelledby="menuItem1" data-parent="#sidenav-menu">
      <div class="menuItem"><a class="menuSubItem" style="color: white;" href="http://localhost:8000/services/create">Crear</a></div>
      <div class="menuItem"><a class="menuSubItem" style="color: white;" href="http://localhost:8000/services/list">Listar</a></div>
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
  <div class="card text-center">
    Bienvenido a Restorink!
  </div>
@endsection
