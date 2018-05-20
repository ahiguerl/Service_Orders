<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Restorink Services</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
      @font-face {
        font-family: 'Eras Light ITC';
        font-style: normal;
        font-weight: normal;
        src: local('Eras Light ITC'),
        url('ERASLGHT.woff') format('woff');
      }
      html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
      }

      .full-height {
        height: 100vh;
      }

      .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
      }

      .position-ref {
        position: relative;
      }

      .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
      }

      .content {
        text-align: center;
      }

      .title {
        font-size: 84px;
      }
      .subTitle {
        font-size: 40px;
        margin-bottom: 30px;
      }
      .links > a {
        color: #222222;
        padding: 0 25px;
        font-size: 18px;
        letter-spacing: .1rem;
        text-decoration: none;
      }
    </style>
  </head>

  <body>
    <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
        <div class="top-right links">
          @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
          @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
          @endauth
        </div>
      @endif

      <div class="content">
        <div class="title m-b-md">
          Restorink
        </div>

        <div class="subTitle m-b-md">
          service management
        </div>

      </div>
    </div>
  </body>
</html>
