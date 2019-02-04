@extends('layouts.app')

@section('title', 'Trainer Edit')

@section('content')

{{-- <div class="container">
    <form class="form-group" action="/trainers/{{ $trainer->slug }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ $trainer->name }}">
        </div>
        <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" name="avatar" id="avatar">
        </div>
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div> --}}

{{-- Edicion de Trainer con LaravelCollective --}}
<div class="container">
        
        {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true]) !!}
  
            @include('trainers.form')
            
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
            
        {!! Form::close() !!}
    </div>
    
@endsection