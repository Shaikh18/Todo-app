@extends('layouts.app')

@section('content')

<form action="{{ route('store_todo') }}" method="Post">
    @csrf
    <div class="form-group my-5">
        <div class="row justify-content-center mt-4">
            <div class="col-md-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
                @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-3">
                <label>Description</label>
                <textarea type="text" class="form-control" name="description"></textarea>
                @error('description')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-3">
                <input type="submit" value="Create Todo" class="btn btn-success">
            </div>
        </div>
    </div>
</form>

@endsection
