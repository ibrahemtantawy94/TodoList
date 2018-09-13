@extends('layouts.app')

@section('content')


<h1> {{$todo -> text}}  </h1> 
<div class = "label label-danger">{{ $todo -> due_date }} </div> 

<hr>
<p> {{ $todo -> body }} </p>    <br><br>

<br><br>
<a href="/todo/{{$todo->id}}/edit" class="btn btn-success">Edit</a>

    {!! Form::open(['action' => ['TodosController@destroy', $todo->id] , 'method' => 'POST' , 'class' =>'pull-right']) !!}
    {!! Form::hidden('_method' , 'DELETE') !!}
    {!! Form::bsSubmit('Delete' , [ 'class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
<br><br>
<a href="/" class="btn btn-primary">Go back</a>

@endsection