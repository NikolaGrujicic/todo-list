@extends('layouts.app')

@section('content')
    <h3>todo list</h3>
    @if(count($todo)>0)
        @foreach($todo as $t)
            <div class="card bg-light card-body mb-3">
                <h3><a href="todo/{{$t->id}}">{{$t->text}}</a><span class="badge badge-danger">{{$t->due}}</span></h3>
            </div>
        @endforeach
    @endif
@endsection