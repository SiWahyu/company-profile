@extends('layouts.app')
@section('title','Tentang')

<?php

$abouts = [
    "Visi Misi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, consequuntur! ",
    "Misi Kami" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum libero maiores cumque totam possimus facere illum, voluptate culpa esse similique?",
];

?>

@section('content')

<div id="about" class="about white-text center">
    <div class="container">
        <div class="row">
            <h2>Tentang Kami</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, aliquam similique iste consectetur amet ipsam repellendus ad, necessitatibus ex cum dolore cumque tempora minima hic commodi, explicabo rerum pariatur nemo.</p>
            <br>
            @foreach ($abouts as $key => $value)

            <div class="col m12 ">
                <h5>{{$key}}</h5>
                <p>
                    {{$value}}
                </p>

            </div>

            @endforeach
        </div>

        <div>
            <i class="fi fi-ss-user"></i>
        </div>
    </div>
</div>

@endsection
