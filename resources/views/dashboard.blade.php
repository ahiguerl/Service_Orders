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

      <div class="menuItem"><a class="menuSubItem" style="color: white;" data-toggle="modal" data-target="#exampleModal">Crear</a></div>
      <div class="menuItem"><a class="menuSubItem" style="color: white;" href="/services/list">Listar</a></div>
      <div class="menuItem"><a class="menuSubItem" style="color: white;" href="#">Modificar</a></div>
  </div>

  <div class="menuItem" id="menuItem2" data-toggle="collapse" data-target="#menuSubItem2" aria-expanded="false" aria-controls="menuSubItem2">
    Clientes
  </div>
  <div id="menuSubItem2" class="collapse" aria-labelledby="menuItem2" data-parent="#sidenav-menu">
    <div class="menuItem"><a class="menuSubItem" style="color: white;" href="/clients/register">Crear</a></div>
    <div class="menuItem"><a class="menuSubItem" style="color: white;" href="#">Listar</a></div>
    <div class="menuItem"><a class="menuSubItem" style="color: white;" href="#">Modificar</a></div>
  </div>

@endsection




@section('dashboard_content')
  <div class="card text-center">
    Bienvenido a Restorink!
  </div>



  {{-- Formulario modal --}}

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  {{-- Fin formulario modal --}}
@endsection
