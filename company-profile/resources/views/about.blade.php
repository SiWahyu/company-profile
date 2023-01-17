<?php

$abouts = [
    "test1" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque saepe provident quasi itaque, pariatur tempora magni! Necessitatibus blanditiis amet tempore perferendis. Optio, quisquam nisi rerum sapiente neque quas veniam necessitatibus.",
    "test2" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquid consequuntur voluptatum eaque possimus ratione doloribus? Eos incidunt, ipsum suscipit fuga laudantium dolor dolorem, non cum sequi, facilis quos
    aperiam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquid consequuntur voluptatum eaque possimus ratione doloribus? Eos incidunt, ipsum suscipit fuga laudantium dolor dolorem, non cum sequi, facilis quos aperiam.",
    "test3" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque saepe provident quasi itaque, pariatur tempora magni! Necessitatibus blanditiis amet tempore perferendis. Optio, quisquam nisi rerum sapiente neque quas veniam necessitatibus."
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
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
    <div>@include('nav')</div>
    <div id="about" class="about white-text center">
        <div class="container">
          <div class="row">
            <h3>About</h3>
            @foreach ($abouts as $key => $value)

            <div class="col m4 ">
              <h4>{{$key}}</h4>
              <p>
                {{$value}}
              </p>
            </div>

            @endforeach
          </div>
        </div>
      </div>
</body>
</html>
