@extends('layouts.app')

@section('title')
  {{ 'Dashboard' }}
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center">Dashboard</div>
          <div class="card-body row">

            <div class="sidenav">
              <div class="">
                Ordenes de Servicio
              </div>
              <div class="">

                <a class="sidenav-item" href="#about">About</a>
                <a class="sidenav-item" href="#about">About</a>
                <a class="sidenav-item" href="#about">About</a>
              </div>
            </div>

            <div class="dashboard-content col">
              {{-- contenido --}}
              <h1>Contenido general</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
