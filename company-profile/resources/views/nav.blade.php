<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('app.css')}}" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>
<body>

    <div class="navbar-fixed navbar">
        <nav class="grey darken-4">
          <div class="container">
            <div class="nav-wrapper">
              <a href="/" class="brand-logo">Logo</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="{{url('about')}}">About</a></li>
                <li><a href="{{url('clients')}}">Clients</a></li>
                <li><a href="{{url('skill')}}">Skill</a></li>
                <li><a href="{{url('project')}}">Project</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <!-- Side nav -->
      <ul class="sidenav" id="mobile-nav">
        <li><a href="{{url('about')}}">About</a></li>
        <li><a href="{{url('clients')}}">Clients</a></li>
        <li><a href="{{url('skill')}}">Services</a></li>
        <li><a href="{{url('project')}}#project">Project</a></li>
      </ul>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        document.addEventListener('DOMContentLoaded', () => {
        const sidenav = document.querySelectorAll('.sidenav');

        M.Sidenav.init(sidenav);
      });
      </script>

</body>
</html>
