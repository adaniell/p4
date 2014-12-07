<!-- /app/views/signup.blade.php -->

@extends('master')

@section('title')
  Sign Up
@stop


@section('content')



<div class="jumbotron">
      <div class="container">
<h1>Sign up</h1>

{{ Form::open(array('url' => '/signup')) }}

    Email<br>
    {{ Form::text('email') }}<br><br>

    Password:<br>
    {{ Form::password('password') }}<br><br>

    {{ Form::submit('Submit') }}

{{ Form::close() }}

</div>
</div>

@stop