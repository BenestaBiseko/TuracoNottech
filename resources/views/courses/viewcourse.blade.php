@extends('index')

@section('content')
<h1>All Courses</h1>
    @if(count($posts)>1)
   <div>
   <table border>
    <tr>
        <td><b>Name of Course</b></td>
        <td><b>Descrption</b></td>
    </tr></div>
    </table>
    
    @foreach($posts as $post)
    <div> 
    <table border>
    <tr>
        <td>{{$post->name}}</td>
        <td> {{$post->descrption}} </td>
        <td><a href="/courses/{{$post->id}}/edit" class="btn btn-secondary">Edit</a></td>
        <td>
        {!! Form::open() !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
        </td>
        </tr>
    </table>
    </div>
    @endforeach
    @else
    <p>No Courses</p>
    @endif
    <div> <a href="/create" class="nav-link active">
              <p>Add Course</p>
            </a></div>
   
@endsection