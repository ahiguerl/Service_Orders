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

            {{-- Sidebar--}}
            <div class="sidenav col-md-3">
              <div class="sidenav-title text-center card-header">
                @yield('sidebar_title') {{--Sidebar title--}}
              </div>
              <div class="sidenav-menu card-body">
                @yield('sidebar_options') {{--Sidebar options--}}
              </div>
            </div>
            {{--End sidebar--}}

            {{--Content in dashboard --}}
            <div class="dashboard-content col">
              <div class="list">
                @yield('dashboard_content') {{--dashboard-content-items--}}
              </div>

            </div>
            {{--End Content in dashboard --}}

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
