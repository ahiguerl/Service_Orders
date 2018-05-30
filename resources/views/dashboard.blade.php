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

      <div class="menuItem"><a class="menuSubItem" style="color: white;" href="/services/create"
        >Crear</a></div>


      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Recipient:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Send message</button>
            </div>
          </div>
        </div>
      </div>


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
@endsection
