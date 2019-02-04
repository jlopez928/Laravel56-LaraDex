@extends('layouts.app')

@section('title', 'Trainer Edit')

@section('content')

<div class="container">
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
</div>
    
@endsection