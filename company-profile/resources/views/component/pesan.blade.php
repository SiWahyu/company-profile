@if ($errors->any())
    <div class="container alert alert-danger p-2">
        <ul>
            @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>
@endif
