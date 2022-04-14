@extends('layouts.app')

@section('content')

    <form action="{{route('update_todo', $todo->id )}}" method="Post">
        @csrf
        <input type="hidden" value="{{ $todo->id }}" name="id">
        <div class="form-group my-5">
            <div class="row justify-content-center mt-4">
                <div class="col-md-3">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $todo->name }}">
                    @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-3">
                    <label>Description</label>
                    <textarea type="text" class="form-control" name="description">{{ $todo->description }}</textarea>
                    @error('description')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-3">
                    <input type="submit" value="Update Todo" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>

@endsection
