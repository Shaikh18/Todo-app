<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show($todoId)
    {
        return view('todos.show')->with('todo', Todo::find($todoId));
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
        $todo = Todo::create($data);
        return redirect('todos');
    }

    public function edit($todoId)
    {
        return view('todos.edit')->with('todo', Todo::find($todoId));
    }

    public function update($todoId)
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);
        $data = request()->all();
        $todo = Todo::find($todoId);
        $todo->update($data);

        return redirect('todos');
    }

    public function delete($todoId)
    {
        $todo = Todo::find($todoId);
        $todo->delete();
        return redirect('todos');
    }
}
