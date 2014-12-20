@extends('master')

@section('title')
Welcome to Your Task Library
@stop


@section('content')

	<h1>Welcome to Your Task Manager Library</h1>
	@if ($tasks->isEmpty())
		<p>You currently do not have any tasks.</p>
		<p><a class="btn btn-primary btn-lg" href="/create" role="button">Add Task &raquo;</a></p>

	@else
		@foreach ($tasks as $task)
  
			<h3>{{ $task['title'] }}</h3> 
			<p><strong>Added:</strong> <em>{{ $task['created_at']}}</em></p>
			<p><strong>Updated:</strong> <em>{{ $task['updated_at']}}</em></p>
				
			<p>	{{ $task['description'] }} </p>

			<p>
				<strong>Complete?</strong> {{ $task['complete'] ? '<span class="complete">Yes</span>' : '<strong>Not yet</strong>' }}
			</p>
				
				<a href="{{ action('TaskController@getEdit', $task->id) }}">
					<button type="button" class="btn btn-xs btn-warning">Edit</button>
				</a>

				<a href="{{ action('TaskController@getDelete', $task->id) }}">
					<button type="button" class="btn btn-xs btn-danger">Delete</button>
				</a>
				<a href="{{ action('TaskController@getCreate', $task->id) }}">
					<button type="button" class="btn btn-xs btn-info">Add Another Task</button>
				</a>
			</p>
		<hr>
		@endforeach
	@endif

@stop