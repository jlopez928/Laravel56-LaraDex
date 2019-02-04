@extends('layouts.app')

@section('title', 'Trainer')

@section('content')

<div class="container">

        <img style="height:200px; width:200px; background-color: #EFEFEF; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{ $trainer->avatar }}" alt="">
        <div class="text-center">
                <h5>{{ $trainer->name }}</h5>
                {{-- <h1>{{ $trainer->slug }}</h1> --}}
                <p>
                    Some quick example text to build on the card title and make up the bulk of the card content.
                    Some quick example text to build on the card title and make up the bulk of the card content.
                    Some quick example text to build on the card title and make up the bulk of the card content.
                </p>
        </div>

</div>
    
@endsection