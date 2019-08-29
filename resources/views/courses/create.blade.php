@extends('index')

@section('content') 
<h1>Add New Course</h1>
{!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
    <div class='form-group'>
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class='form-group'>
        {{Form::label('descrption', 'Descrption')}}
        {{Form::text('descrption', '', ['class' => 'form-control', 'placeholder' => 'Descrption'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection