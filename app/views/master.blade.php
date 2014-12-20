<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title','Task Manager')</title>


    <!-- Custom Css -->
    <link href="/css/custom.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <link href="/stylesheet.css" rel="stylesheet">

  </head>
<body>

	    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Task Manager</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div class="navbar-form navbar-right">
           	@if(Auth::check())
    			<a href='/logout' class="btn btn-success">Log out {{ Auth::user()->email; }}</a>
			@else 
    			<a href='/signup' class="btn btn-success">Sign up</a>  <a href='/login' class="btn btn-success">Log in</a>
			@endif

      @if(Session::get('flash_message'))
            <div class='flash-message' style='color:red;margin-top:10px;'>{{ Session::get('flash_message') }}</div>
        @endif


          </div>
        </div><!--/.navbar-collapse -->


      </div>
    </nav>

<div style="margin-top:20px;">&nbsp;</div>

<div class="container">

  @yield('content')

  <hr>
  	<footer>
        <p><a class="btn btn-primary btn-lg" href="/message_board" role="button">Message Board &raquo;</a>

        {{ HTML::mailto('adaniell547@gmail.com', 'Submit Feedback &raquo;', array('class' => 'btn btn-primary btn-lg')) }}

       </p>

        <p>&copy; Ashley Daniell 2014</p>
    </footer>
    
</div>

	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
     <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	
</body>
</html>
