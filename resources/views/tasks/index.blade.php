@extends('layout.master')

@section('content')

    <h1>Task List</h1>
    <p class="lead">Here's a list of all your tasks. <a href="{{ route('tasks.create') }}">Add a new one?</a></p>
    <hr>
    @foreach($tasks as $task)
        <h2>{{ $task->id }}.</h2>
{{--        <h3>{{ $task->name }}</h3>--}}
        <h3>{{ $task->title }}</h3>
        <p>{{ $task->description}}</p>
        <p>
            <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View Task</a>
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
        </p>
        <hr>
    @endforeach
    <?php echo $tasks->render(); ?>
@stop