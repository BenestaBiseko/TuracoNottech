@extends('index')

@section('content') 
<h1>Edit Course</h1>
{!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}
    <div class='form-group'>
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $post->name, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class='form-group'>
        {{Form::label('descrption', 'Descrption')}}
        {{Form::text('descrption', $post->descrption, ['class' => 'form-control', 'placeholder' => 'Descrption'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection