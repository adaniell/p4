@extends('master')

@section('title')
Message Board
@stop

@section('content')

<h1>Add to the Message Board</h1>
<p></p>
<p class="text-danger">* = required field</p>

{{ Form::open(array('url' => '/create_comment')) }}

	<div class='form-group'>
		{{ Form::label('subject','Subject') }} </br>
		{{ Form::text('subject'); }}
	</div>

	<div class='form-group'>
		{{ Form::label('comment_text', 'Comments') }}  <span class="text-danger">*</span> </br>
		{{ Form::textarea('comment_text'); }}
	</div>

	{{ Form::submit('Add', array('class' => 'btn btn-lg btn-default')); }}

{{ Form::close() }}

@stop