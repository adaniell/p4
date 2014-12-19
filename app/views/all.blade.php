@extends('master')

@section('title')
Welcome to Your Task List
@stop

@section('head')
@stop

@section('content')

	<h1>Welcome to Your Task Manager Library</h1>
	@if ($tasks->isEmpty())
		<p>You currently do not have any tasks.</p>

	@else
		@foreach ($tasks as $task)
  
			<h3>{{ $task['title'] }}</h3> 
			<p><strong>Added:</strong> <em>{{ $task['created_at']}}</em></p>
			<p><strong>Updated:</strong> <em>{{ $task['updated_at']}}</em></p>
				
			<p>	{{ $task['description'] }} </p>

			<p>
				<strong>Task complete?</strong> {{ $task['complete'] ? 'Yes' : 'Not yet' }}
			</p>
				
				<a href="{{ action('TaskController@getEdit', $task->id) }}">
					<button type="button" class="btn btn-xs btn-warning">Edit</button>
				</a>

				<a href="{{ action('TaskController@getDelete', $task->id) }}">
					<button type="button" class="btn btn-xs btn-danger">Delete</button>
				</a>
			</p>
		@endforeach
	@endif

@stop