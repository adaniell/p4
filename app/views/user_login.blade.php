@extends('master')

@section('title')
  Log In
@stop

@section('content')

<div class="jumbotron">
    <div class="container">

	<h1>Log in</h1>

	{{ Form::open(array('url' => '/login')) }}

	    {{ Form::label('email') }}
	    {{ Form::text('email') }}<br><br>

	    {{ Form::label('password') }}
	    {{ Form::password('password') }}<br><br>

	    {{ Form::submit('Submit') }}

	{{ Form::close() }}

	</div>
</div>

@stop

