
@extends('master')

@section('title')
  Welcome to your Task Manager!
@stop


@section('content')

   <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Task Manager Application</h1>
        <p>Welcome!</p>
        <p><a class="btn btn-primary btn-lg" href="/create" role="button">Add Task &raquo;</a></p>
      </div>
    </div>


      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>All Tasks</h2>
          <p>View a list of all your tasks. </p>
          <p><a class="btn btn-default" href="/all" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Incomplete Tasks</h2>
          <p>View a list of all your incomplete tasks. </p>
          <p><a class="btn btn-default" href="/incomplete" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Completed Tasks</h2>
          <p>View a list of all your completed tasks. </p>
          <p><a class="btn btn-default" href="/complete" role="button">View details &raquo;</a></p>
        </div>
      </div>


    

 @stop