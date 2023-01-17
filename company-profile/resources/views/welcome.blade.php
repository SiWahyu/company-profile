<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Css gwe -->
    <link rel="stylesheet" href="{{asset('app.css')}}" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Company Profile</title>
  </head>
  <body>
    <!-- Navbar -->
    <div>
        @include('nav')
    </div>
    <!-- Slide -->

    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/slider/1.jpg" />
          <!-- random image -->
          <div class="caption left-align">
            <h1>Welcome to our WEB Company Profile</h1>
          </div>
        </li>
        <li>
          <img src="img/slider/2.jpg" />
          <!-- random image -->
          <div class="caption center-align">
            <h1>This is our big Tagline!</h1>
          </div>
        </li>
        <li>
          <img src="img/slider/3.jpg" />
          <!-- random image -->
          <div class="caption right-align">
            <h1>This is our big Tagline!</h1>
          </div>
        </li>
        <li>
          <img src="img/slider/4.jpg" />
          <!-- random image -->
          <div class="caption center-align">
            <h1>This is our big Tagline!</h1>
          </div>
        </li>
      </ul>
  </div>

    <!-- About -->
    <div>
        @include('about')
    </div>

    <!-- Client -->
    <div>
        @include('clients')
    </div>

    {{-- Skill --}}


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
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
  </body>
</html>
