
@extends('layout')

@section('content1')
  <form action="{{ route('todos.save', ['id' => $todo->id ]) }}" method="POST">
    {{ csrf_field() }}
    <input name="todo" class="form-control" value="{{ $todo->todo }}" placeholder="Create new todo" />
  </form>
  <hr>
@stop
