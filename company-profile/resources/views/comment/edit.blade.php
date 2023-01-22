@extends('layouts.app')

@section('title','Contact')

@section('contact')
      <div class="col m7 s12">
        <form action="/comments/{{$kontakId->id}}" method="POST">
            @method('put')
            @csrf
          <div class="card-panel">
            <h5>Edit</h5>
            <div class="input-field">
              <input type="text" name="name" id="nama" autocomplete="off" value="{{$kontakId->name}}"/>
              <label for="name">Name</label>
            </div>
            <div class="input-field">
              <input type="email" name="email" id="email" autocomplete="off" value="{{$kontakId->email}}"/>
              <label>Email</label>
            </div>
            <div class="input-field">
              <textarea name="message" id="message" class="materialize-textarea">{{$kontakId->message}}</textarea>
              <label for="message">Message</label>
            </div>
            <br>
            <button type="submit" name="submit" class="btn blue darken-2">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  @endsection
