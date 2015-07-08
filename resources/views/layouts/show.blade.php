<!-- resources/views/user/form.blade.php -->

@extends('layouts.master')

@section('title', $title)

{{-- Define the content of the form here, will be place in div '.form-content' --}}
@section('content')	
	<div class="profile-heading">	
		<h1>{{ $user->name }}</h1>
		<h5>{{ $user->email }}</h5>	
	</div>

	<div class="profile-comments">
		<h2>Comments</h2>
		 @forelse ($comments as $comment)
	    	<div class="blog-comment-item container">	    	
				<div class="row">
					<div class="col-md-3">
						{{ $comment->updated_at }}
					</div>
					<div class="col-md-8">
						{{ $comment->body }}
					</div>
				</div>
			</div>
		@empty
			<p>No comments yet.</p>
		@endforelse		
	</div>
	
@endsection

{{-- Add template specific script initialisation here --}}
@section('inline-scripts')    

	<script type="text/javascript">
		$(document).ready(function() {
			blog.initUserControls();
		});
	</script>
	
@endsection
    