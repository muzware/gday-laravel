<!-- resources/views/blog.blade.php -->

@extends('layouts.master')

@section('title', "Muz's Blog")

@section('content')
      <div class="blog-header">
        <h1 class="blog-title">Muz's Blog - G'day!</h1>
        <p class="lead blog-description">A journey of exploration into Laravel.</p>
        <p>This blog has been developed in an effort to develop a practical understanding of Laravel, and to demonstrate that understanding as part of a job application process.</p>
      </div>

      <div class="row">

        <div class="col-sm-12 blog-main">
        
		  <!-- Iterate through the blog entries, most recent posts first -->
		  @foreach($entries as $entry)
	          <div class="blog-post">
	            <h3 id="blog-post-{{ $entry->id }}" class="blog-post-title">{{ $entry->title }}</h3>
	            <p class="blog-post-meta">{{ $entry->updated_at }}</p>
	            <?php echo $entry->body; ?>
	          </div><!-- /.blog-post -->
	      @endforeach
	      
        </div><!-- /.blog-main -->

      </div><!-- /.row -->
@endsection

@section('footer')
	@parent
	<p><a href="#">Back to top</a></p>
@endsection
