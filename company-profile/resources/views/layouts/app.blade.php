<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | PT Suki</title>

    <link rel="stylesheet" href="{{asset('app.css')}}" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <link href="/website/css/uicons-bold-rounded.css"
rel="stylesheet">
</head>
<body>

    <div class="navbar-fixed navbar">
        <nav class="grey darken-4">
          <div class="container">
            <div class="nav-wrapper">
              <a href="/" class="brand-logo">PT Suki</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/clients">Clients</a></li>
                <li><a href="/contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <!-- Side nav -->
      <ul class="sidenav" id="mobile-nav">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/clients">Clients</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>

      {{-- Content --}}
      @yield('contact')
      @yield('content')
      @yield('skill')
      @yield('slider')
      @yield('clients')
      @yield('footer')


      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const sidenav = document.querySelectorAll('.sidenav');

        M.Sidenav.init(sidenav);
      });

      document.addEventListener('DOMContentLoaded', () => {
        const slide = document.querySelectorAll('.slider');
        M.Slider.init(slide, {
          indicators: false,
          interval: 4500,
          height: 650,
        });
      });

      document.addEventListener('DOMContentLoaded', () => {
        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);
      });
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
