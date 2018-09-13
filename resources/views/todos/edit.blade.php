@extends('layouts.app')

@section('content')

<a href="/todo/{{$todo->id}}" class="btn btn-default">Back</a>
<br>
    <h1>Edit Todo</h1>
{!! Form::open(['action' => ['TodosController@update' , $todo->id] , 'method' => 'POST']) !!}
<!-- عشان نخزن الداتا بتاعة الفورم فى الداتابيز -->
   {!! Form::bsText('text',$todo->text) !!}
   {!! Form::bsTextArea('body',$todo->body) !!}
   {!! Form::bsText('due_date' , $todo->due_date) !!}
   {!! Form::hidden('_method' , 'PUT') !!}
   {!! Form::bsSubmit('submit') !!}

{!! Form::close() !!}
@endsection