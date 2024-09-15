@extends('layouts.app')

@section('content')
<h1>Task List</h1>
<a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add Task</a>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Completed</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->completed ? 'Yes' : 'No' }}</td>
            <td>
                <form action="{{ route('tasks.toggle', $task) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-sm {{ $task->completed ? 'btn-success' : 'btn-secondary' }}">
                        {{ $task->completed ? 'Completed' : 'Mark Completed' }}
                    </button>
                </form>
                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-info ml-1">Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-1">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection