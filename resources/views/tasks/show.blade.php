@extends('layout.master')
@section('content')

    <h1>{{$task->title}}</h1>
    <p>{{$task->description}}</p>

    <a href= "{{ route('tasks.index')  }}" class = "btn btn-info">Back to All Tasks</a>
    <a href= "{{ route('tasks.edit', $task->id)  }}" class = "btn btn-primary">Edit Task</a>


    <div class="col-md-6 pull-right text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['tasks.destroy', $task->id]
        ]) !!}
        {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop