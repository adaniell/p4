@extends('master')

@section('title')
Message Board
@stop


@section('content')
	<h1>Welcome to the Message Board!</h1>
	<p>Feel free to share your thoughts with other Task Manager Users. </p>

	<hr>

	@if ($comments->isEmpty())
		<p>There are currently no messages.</p>
	@else
		@foreach($comments as $comment)
		<div class="bg-info" style="padding:15px;">
			<p><strong>{{ $comment->subject }}</strong> <br>
				{{ $comment->comment_text }} <br>
			</p>
		</div>
			<hr>
		@endforeach
	@endif

	<p><a href="{{ action('CommentController@getCreate') }}">Add a Message</a></p>


@stop