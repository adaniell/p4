@extends('master')

@section('title')
Add a New Task
@stop

@section('content')
<h1>Add a New Task</h1>
<p class="text-danger">* = required field</p>

{{ Form::open(array('url' => '/create')) }}

	<div class='form-group'>
		{{ Form::label('title','Title') }}  <span class="text-danger">*</span> </br>
		{{ Form::text('title'); }}
	</div>

	<div class='form-group'>
		{{ Form::label('description', 'Description') }} </br>
		{{ Form::textarea('description'); }}
	</div>

	</br>
	{{ Form::submit('Add', array('class' => 'btn btn-lg btn-default')); }}

{{ Form::close() }}


@stop