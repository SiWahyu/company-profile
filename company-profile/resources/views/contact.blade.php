@extends('layouts.template')
@section('title','Contact')
@section('contact')
<!-- START FORM -->
<div class="container text-center p-4">
    <h1>Contact</h1>
</div>


<form action='' method='POST'>
    @csrf
    @include('component.pesan')
    <a href="{{url('/')}}" class="btn btn-secondary text-bold">KEMBALI</a>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' id="name" autocomplete="off" placeholder="Name" value="{{Session::get('name')}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='email' id="email" autocomplete="off" placeholder="Email" value="{{Session::get('email')}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10 form-outline">
                <textarea class="form-control" name="message" id="message" placeholder="Message" rows="6">{{Session::get('message')}}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
    </div>
    <!-- AKHIR FORM -->
    @endsection
