@extends('master')

@section('title')
	Confirm Deletion
@stop

@section('content')         

    <h1>Are you sure you want to delete {{ $task->title }}?</h1>

	{{ Form::open(array('action' => array('TaskController@postDelete', $task->id))) }}
	
		<div class='form-group'>
			{{ Form::submit('Yes', array('class' => 'btn btn-lg btn-default')) }}
		</div>
		
	{{ Form::close() }}

<p><a href="/all">Nevermind, go back to all my tasks.</a></p>

@stop