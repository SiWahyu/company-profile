@extends('layouts.app')

@section('title','Contact')

@section('contact')
<!-- Contact -->
<section id="contact" class="contact blue lighteen-3">
    <div class="container">
      <h3 class="light white-text text-darken-3 center">Contact Us</h3>
    </div>
    <div class="row">
      <div class="col m5 s12">
        <div class="card-panel blue darken-2 center white-text">
          <i class="material-icons">email</i>
          <h5>Contact</h5>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga est deleniti nam sint. Officia atque fugit commodi cum distinctio eaque inventore nam laboriosam!</p>
        </div>
        <ul class="collection with-header">
          <li class="collection-header"><h4>Our Office</h4></li>
          <li class="collection-item">JL. Tanah Baru No. 178, Depok</li>
          <li class="collection-item">West Java Indonesia</li>
        </ul>
      </div>
      <div class="col m7 s12">
        <form action="act_dasis.php" method="POST">
          <div class="card-panel">
            <h5>Please Fill Ou This Form</h5>
            <div class="input-field">
              <input type="text" name="nama" id="nama" />
              <label for="nama">Name</label>
            </div>
            <div class="input-field">
              <input type="email" name="email" id="email" />
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <textarea name="message" id="message" class="materialize-textarea"></textarea>
              <label for="message">Message</label>
            </div>
            <button type="submit" class="btn blue darken-2">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  @endsection
