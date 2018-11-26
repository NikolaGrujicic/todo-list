@extends('layouts.app')

@section('content')

    <h1>Edit todo</h1>
    <a class="btn btn-secondary" href="/">Go back</a>
    {!! Form::open(['action' => ['ToDosController@update', $todo->id], 'method' => 'POST']) !!}
    {{ Form::bsText('text', $todo->text) }}
    {{ Form::bsTextArea('body', $todo->body) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::bsSubmit('Submit', ['class'=>'btn btn primary']) }}
    {!! Form::close() !!}

@endsection