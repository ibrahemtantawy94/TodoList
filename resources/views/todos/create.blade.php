@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>

    {!! Form::open(['action' => 'TodosController@store' , 'method' => 'POST']) !!}
     <!-- عشان نخزن الداتا بتاعة الفورم فى الداتابيز -->

        {!! Form::bsText('text') !!}
        {!! Form::bsTextArea('body') !!}
        {!! Form::bsText('due_date') !!}
        {!! Form::bsSubmit('submit') !!}


    {!! Form::close() !!}

@endsection

