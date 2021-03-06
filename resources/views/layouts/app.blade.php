<!DOCTYPE html>
<html lang="lang="es" dir="ltr"">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Ajuste de título al navegar --}}
    <title>@yield('title')</title>



    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>

  <body class="myBody">
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light myNavbar ">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">

            <img src="{{ asset('images/restorink_logo.png') }}" height="43" width="324">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                <li><a class="nav-link" style="color: white;" href="{{ route('login') }}">{{ __('Login') }} </a></li>
                <li><a class="nav-link" style="color: white;" href="{{ route('register') }}">{{ __('Register') }}</a></li>
              @else
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: white;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>

      @yield('alerts')

      <main class="py-4">
        @yield('content')
      </main>
      <svg id="barcode"></svg>
    </div>


    <script type="text/javascript">
      var element =  document.getElementById ("barcode");
      JsBarcode(element, "prueba");
    </script>

    @yield('scripts')
    {{-- <script type="text/javascript">

    </script> --}}

  </body>
</html>
