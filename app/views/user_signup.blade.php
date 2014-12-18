@extends('master')

@section('title')
  Sign Up
@stop

@section('content')

<div class="jumbotron">
    <div class="container">

	<h1>Sign up</h1>

	@foreach($errors->all() as $message)
		<div class='error'>{{ $message }}</div>
	@endforeach

	{{ Form::open(array('url' => '/signup')) }}

	 {{-- {{ Form::label('First Name') }}
	    {{ Form::text('first_name') }}<br><br>

	    {{ Form::label('Last Name') }}
	    {{ Form::text('last_name') }}<br><br>--}}

 <div class="form-group">
	    {{ Form::label('email') }}
	    {{ Form::text('email') }}<br><br>
</div>
 <div class="form-group">
	    {{ Form::label('password') }}
	    {{ Form::password('password') }}
	    <small>Min 6 characters</small><br><br>
</div>

	    {{ Form::submit('Submit') }}

	{{ Form::close() }}

	</div>
</div>

@stop