@extends('layouts.app')

@section('content')
<h1>Create New Task</h1>
<a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3">Task List</a>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>
@endsection