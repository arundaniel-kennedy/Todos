<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Todo;

class TodosController extends Controller
{
    public function index(){
      $todos = Todo::all();

      return view('todos')->with('todos',$todos);//(name for the variable,variable)
    }

    public function store(Request $request)
    {
      //dd($request->all());//to display the content

      $todo = new Todo;

      $todo->todo = $request->todo;
      $todo->save();

      Session::flash('success','Your todo is created');
      return redirect()->back();
    }

    public function delete($id)
    {
      //d($id);//die dom

      $todo = Todo::find($id);

      $todo->delete();
      Session::flash('success','Your todo is deleted');
      return redirect()->back();
    }

    public function update($id)
    {
      $todo = Todo::find($id);

      return view('update')->with('todo',$todo);
    }

    public function save(Request $request,$id)
    {
      $todo = Todo::find($id);

      $todo->todo = $request->todo;
      $todo->save();
      Session::flash('success','Your todo is updated');
      return redirect()->route('todos');
    }

    public function completed($id)
    {
      $todo = Todo::find($id);

      $todo->completed = 1;
      $todo->save();
      Session::flash('success','Your todo is marked complete');
      return redirect()->route('todos');
    }

    public function incomplete($id)
    {
      $todo = Todo::find($id);

      $todo->completed = 0;
      $todo->save();
      Session::flash('success','Your todo is marked incomplete');
      return redirect()->route('todos');
    }

}
