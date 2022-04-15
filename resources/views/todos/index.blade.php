@extends('layouts.app')

@section('content')

    <h1 class="text-center my-5">Todo</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Todos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}

                                <a href="{{ route('todo', $todo->id)}}" class="btn btn-outline-primary btn-sm float-end">View </a>
                                @if(!$todo->completed)
                                    <a href="{{ route('complete_todo', $todo->id)}}" class="btn btn-outline-success btn-sm float-end ">Completed</a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection
