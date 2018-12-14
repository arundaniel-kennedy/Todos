@extends('layout')

@section('content')
Todo list's
@stop

@section('content1')
 <form action="todos/create" method="post">
   {{ csrf_field() }}
   <input type="text" name="todo" class="form-control" placeholder="Create new todo" />
 </form>
 <hr>
 @foreach($todos as $todo)
   {{ $todo->todo }}
   @if(!$todo->completed)
     <a href="{{ route('todos.completed',[ 'id'=>$todo->id ]) }}" class="btn btn-success btn-xs">Mark as complete</a>
   @else
     <a href="{{ route('todos.incomplete',[ 'id'=>$todo->id ]) }}" class="btn btn-dark btn-xs">Mark as incomplete</a>
   @endif
   <a href="{{ route('todos.update',['id' => $todo->id ]) }}" class="btn btn-info btn-xs">update</a>
   <a href="{{ route('todos.delete',['id' => $todo->id ]) }}" class="btn btn-danger btn-sm">X</a>
   <hr />
 @endforeach
@stop
