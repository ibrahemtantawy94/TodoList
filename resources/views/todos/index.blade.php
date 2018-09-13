@extends('layouts.app')

@section('content')
    <h1>Todos</h1>
    @if(count($todos) > 0)

        @foreach($todos as $todo)

            <div class = "well">

                    <a href="todo/{{ $todo -> id }}"><h3>{{ $todo -> text }}</h3></a>
                    <span class = "label label-danger">{{ $todo -> due_date }} </span>
            </div>

        @endforeach

    @endif
@endsection