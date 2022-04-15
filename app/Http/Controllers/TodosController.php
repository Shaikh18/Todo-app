<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store()
    {
        $this->validate(request(), [
           'name' => 'required',
           'description' => 'required'
        ]);
        $data = request()->all();
        Todo::create($data);
        session()->flash('success', 'Todo Created Successfully');
        return redirect('todos');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Todo $todo)
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);
        $data = request()->all();
        $todo->update($data);
        session()->flash('success', 'Todo Updated Successfully');
        return redirect('todos');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        session()->flash('success', 'Todo Deleted Successfully');
        return redirect('todos');
    }

    public  function complete(Todo $todo)
    {
        $todo->completed = true;
        $todo->save();
        session()->flash('success', 'Todo Completed Successfully');
        return redirect('todos');
    }
}
