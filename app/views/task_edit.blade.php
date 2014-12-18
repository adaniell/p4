@extends('master')

@section('title')
	Edit Task
@stop

@section('content')

	<h1>Edit {{ $task->title }}?</h1>
	<p class="text-danger">* = required field</p>

   {{ Form::open(array('action' => array('TaskController@getEdit', $task->id))) }}
		<div class='form-group'>
		{{ Form::label('title','Title') }} <span class="text-danger">*</span> </br>
		{{ Form::text('title',$task['title']); }}
		</div>

		<div class='form-group'>
		{{ Form::label('description','Description') }} </br>
		{{ Form::textarea('description',$task['description']); }}
		</div>

		<div class='form-group'>
		{{ Form::label('complete','Complete?') }}
		{{ Form::checkbox('complete',$task['value']); }}
		</div>

		{{ Form::submit('Save', array('class' => 'btn btn-lg btn-default')); }}

	{{ Form::close() }}

	</br>
    <p><a href="/all">Nevermind, go back to all my tasks.</a></p>

@stop