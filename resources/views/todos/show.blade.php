@extends('layouts.app')

@section('content')

    <h1 class="text-center my-5">{{ $todo->name }}</h1>
    <div class="card card-default">
        <div class="card-header">
            Details
        </div>
        <div class="card-body">
            {{ $todo->description }}
        </div>
        <a href="{{ route('edit_todo', $todo->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('delete_todo', $todo->id) }}" class="btn btn-danger">Delete</a>
    </div>

@endsection
