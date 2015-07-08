<!-- resources/views/layouts/bootstrap.blade.php -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>@yield('title')</title>
	
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
	<!-- Boostrap example blog CSS -->
    <link href="/css/blog.css" rel="stylesheet">
	@yield('extra-styles')
    
<!-- Browser compatability -->    
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
   	
</head>

	<body>
		<div class="blog-masthead">
			<div class="container">
				<nav class="blog-nav">
					<a id="blog-nav-home" class="blog-nav-item" href="/">Home</a>
					<a id="blog-nav-about" class="blog-nav-item" href="/about">About</a>
					<a id="blog-nav-log-in-out" class="blog-nav-item" href="/auth/login">Login / Register</a>
				<nav class="blog-nav">					
					<a id="blog-nav-user-test" class="blog-nav-item" href="/users">Users</a>
					<a id="blog-nav-entry-test" class="blog-nav-item" href="/entries">Entries</a>
					<a id="blog-nav-comment-test" class="blog-nav-item" href="/comments">Comments</a>
				</nav>
			</div><!-- /.container -->
		</div>


	<div class="blog-content container">
		@yield('content')
	</div><!-- /.container -->

    <footer class="blog-footer">
		@section('footer')
			<p>G'day, Laravel - a blog application built as part of a job application process, by <a href="http://gday.muzware.com">Murray James</a>.</p>
		@show	
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    @yield('vendor-scripts')
    <!-- Public Blog Script -->
    <script src="/js/blog.js"></script>
    
	<!-- Browser compatability -->    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
    
    <!-- Public Inline Script to Initialise public.js -->
	<script type="text/javascript">
		$(document).ready(function() {
			console.log('document ready fired');
			blog.init();
		});
	</script>
    
    @yield('inline-scripts')
    
  </body>
</html>
