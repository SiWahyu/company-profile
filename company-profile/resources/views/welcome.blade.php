@extends('layouts.app')
@section('title','Home')

@section('slider')
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
          <img src="img/slider/3.jpeg" />
          <!-- random image -->
          <div class="caption right-align">
            <h1>This is our big Tagline!</h1>
          </div>
        </li>
      </ul>
  </div>
@endsection

@section('footer')
<footer class="grey darken-4 white-text center" style="padding: 8px">
    <p class="flow-text">Copyright Kelompok 1 All right reserved</p>
  </footer>
@endsection

