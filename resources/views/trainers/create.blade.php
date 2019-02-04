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
    {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('avatar', 'Avatar') !!}
            {!! Form::file('avatar') !!}
        </div>

        
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}
</div>

    
@endsection