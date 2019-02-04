@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')



{{-- <div class="container">
    <form class="form-group" action="/trainers" method="post" enctype="multipart/form-data">
        {{ @csrf_field() }}
        <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" name="avatar" id="avatar">
        </div>
    
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div> --}}

{{-- Creacion de Trainer con LaravelCollective --}}
<div class="container">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        
    @endif

    {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}

        @include('trainers.form')
        
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}
</div>

    
@endsection