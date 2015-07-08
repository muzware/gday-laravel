<!-- resources/views/shared/blog-masthead.blade.php -->
@section('masthead')
      <div class="container">
        <nav class="blog-nav">
          <a id="blog-nav-home" class="blog-nav-item" href="/">Blog</a>
          <a id="blog-nav-login" class="blog-nav-item" href="/auth/login">Login</a>
          <a id="blog-nav-register" class="blog-nav-item" href="/auth/register">Register</a>
          <a id="blog-nav-about" class="blog-nav-item" href="/about">About</a>
          <a id="blog-nav-logout" class="blog-nav-item" href="/auth/logout">Logout</a>
        </nav>
      </div><!-- /.container -->
@endsection