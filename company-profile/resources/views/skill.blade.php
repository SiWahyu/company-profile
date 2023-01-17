<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Css gwe -->
    <link rel="stylesheet" href="{{asset('app.css')}}" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>
<body>
    <div>@include('nav')</div>
    <div id="services" class="services">
        <div class="container center">
          <h3>Skill Company</h3>
          <div class="row">
            <div class="col l4 s12 kartu">
              <div class="card">
                <div class="card-image">
                  <img src="img/services/web.jpg" />
                </div>
              </div>
              <h5>Web Developer</h5>
            </div>
            <div class="col l4 s12 kartu">
              <div class="card">
                <div class="card-image">
                  <img src="img/services/ui.jpg" />
                </div>
              </div>
              <h5>UI/UX</h5>
            </div>
            <div class="col l4 s12 kartu">
              <div class="card">
                <div class="card-image">
                  <img src="img/services/data.jpg" />
                </div>
              </div>
              <h5>Data Analyst</h5>
            </div>
            <div class="col l4 s12 kartu">
              <div class="card">
                <div class="card-image">
                  <img src="img/services/andro.jpg" />
                </div>
              </div>
              <h5>Android Developer</h5>
            </div>
            <div class="col l4 s12 kartu">
              <div class="card">
                <div class="card-image">
                  <img src="img/services/devops.jpg" />
                </div>
              </div>
              <h5>DevOps</h5>
            </div>
            <div class="col l4 s12 kartu">
              <div class="card">
                <div class="card-image">
                  <img src="img/services/server.jpg" />
                </div>
              </div>
              <h5>Database Server</h5>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
