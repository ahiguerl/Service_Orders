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

            <div class="sidenav col-md-3"> {{-- Sidebar--}}
              <div class="sidenav-title text-center card-header">
                Dashboard
              </div>

              <div class="sidenav-menu card-body">
                <div class="menuItem" id="menuItem1" data-toggle="collapse" data-target="#menuSubItem" aria-expanded="false" aria-controls="menuSubItem">
                  Collapsible
                </div>

                <div id="menuSubItem" class="collapse menuItem menuSubItem" aria-labelledby="menuItem1" data-parent="#sidenav-menu">
                    elementos a listar
                </div>
              </div>
            </div> {{--end sidebar--}}

            <div class="dashboard-content col"> {{-- Content in dashboard --}}

              <div class="list">
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
              </div>

            </div> {{--  end Content in dashboard --}}

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
