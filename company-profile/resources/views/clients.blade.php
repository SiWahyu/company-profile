<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <div>
        @include('nav')
    </div>
        <!-- Client -->
        <div class="parallax-container" id="clients">
            <div class="parallax">
              <img src="img/paralax/uOiINBLP.png" />
            </div>
            <div class="container client center">
              <div class="row">
                <h3 class="center white-text">Client Kami</h3>
                <div class="col m6 s12">
                  <img src="img/client/1.png" />
                </div>
                <div class="col m6 s12">
                  <img src="img/client/2.png" />
                </div>
                <div class="col m6 s12">
                  <img src="img/client/3.png" />
                </div>
                <div class="col m6 s12">
                  <img src="img/client/sopi.png" />
                </div>
              </div>
            </div>
          </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

          <div class="project" id="project">
            <div class="center white-text">
              <div class="row">
                <h3>Project</h3>
                <div class="col l3 s12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/project/1.jpg" />
                    </div>
                  </div>
                  <h5>UI UX</h5>
                </div>
                <div class="col l3 s12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/project/2.jpg" />
                    </div>
                  </div>
                  <h5>E-Learning</h5>
                </div>
                <div class="col l3 s12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/project/3.jpg" />
                    </div>
                  </div>
                  <h5>Website</h5>
                </div>
                <div class="col l3 s12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/project/4.jpg" />
                    </div>
                  </div>
                  <h5>Mobile App</h5>
                </div>
                <div class="col l3 s12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/project/5.jpg" />
                    </div>
                  </div>
                  <h5>Toko Online</h5>
                </div>
                <div class="col l3 s12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/project/6.jpg" />
                    </div>
                  </div>
                  <h5>Sosial Media</h5>
                </div>
                <div class="col l3 s12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/project/7.jpg" />
                    </div>
                  </div>
                  <h5>Streaming Film</h5>
                </div>
                <div class="col l3 s12">
                  <div class="card">
                    <div class="card-image">
                      <img src="img/project/8.jpg" />
                    </div>
                  </div>
                  <h5>Portfolio</h5>
                </div>
              </div>
            </div>
          </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
          <script>
            document.addEventListener('DOMContentLoaded', () => {
        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);
      });
          </script>
</body>
</html>
